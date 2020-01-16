class Cart
{

    constructor()
    {
        
        this.products= this.load();  // Charge le contenu du localstorage, nécessaire a la persistence.
        this.validate()
        document.querySelector('#cartcontent').innerHTML = this.products.length;
    }

    add(e)
    {
        e.preventDefault();  // Interrompt le lancement du lien.
        let product = {'name' : e.target.dataset.name,'product' : e.target.dataset.id, 'quantity': e.target.dataset.quantity , 'price' : e.target.dataset.price }; // prépare un produit sous forme d objet.
        this.products.push(product); // rajoute le produit dans le tableau "products" définis dans la classe.
        
        //document.querySelector('#cartprice').innerHTML = totalCart + " Euros.";
        this.save();
        this.update();
    }

    save()
    {
        window.localStorage.setItem('products', JSON.stringify(this.products));
       // lance la persistence dans le localstorage, apres l'avoir transformé en string.
    }

    load()
    {
        let retrieveProducts = localStorage.getItem('products');  // récupére la key "products" dans le localstorage.
        // Parse sous forme d'objets le contenu de "products" et l'attribue au tableau products de la classe cart.
        if(retrieveProducts == null){
            return new Array();
        }
        return JSON.parse(retrieveProducts);
    }

    loadJson()
    {
        let retrieveProducts = localStorage.getItem('products');
        //retrieveProducts contient la liste des produits du panier sous format Json.
        if(retrieveProducts == null){
            return new Array();
        }
        return retrieveProducts;
    }

    update(){ 
        document.querySelector('#cartcontent').innerHTML = this.products.length;
    }
    
    validate(){
        if(document.getElementById('listproduct'))
        {
            let productsJson = this.loadJson();
            document.querySelector('#listproduct').value = productsJson;
        }
    }
    clear(e){
        this.products= []; // Clear la liste de produits du localstorage, le php prend le relais pour aller en bdd.
        this.save();
        this.update();
    }


}
