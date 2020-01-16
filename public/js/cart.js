class Cart
{
//----------------------------------------------------------------------------------------------------------
//L'objet Cart contient diverses méthodes assez "crud" permettant de le manipuler: Enregistrer les produits dans le localstorage, les récupérer, etc...
//----------------------------------------------------------------------------------------------------------
    constructor()
    {
        // A l'instanciation de l'objet, la méthode constructor se lance afin de charger la liste des produits du localstorage, et la mise à jour du header.
        this.products= this.load();  // Charge le contenu du localstorage, nécessaire a la persistence.
        this.validate()
        document.querySelector('#cartcontent').innerHTML = this.products.length; // Met à jour le compte de produits dans le panier, dans le header du site.
    }

    add(e)
    {
        e.preventDefault();  // Interrompt le lancement du lien.
        let product = {'name' : e.target.dataset.name,'product' : e.target.dataset.id, 'quantity': e.target.dataset.quantity , 'price' : e.target.dataset.price }; // prépare un produit sous forme d objet.
        this.products.push(product); // rajoute le produit dans le tableau "products" définis dans la classe.
        
        this.save(); // on stock dans le localstorage après transformation en string.
        this.update(); // On update le nombre d'objets dans le panier dans le header.
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
        // si on est dans la page panier, on stock sous format JSON la liste des produits, pour préparer l'envoi en bdd...
        if(document.getElementById('listproduct'))
        {
            let productsJson = this.loadJson();
            document.querySelector('#listproduct').value = productsJson;
        }
    }
    clear(e){
        this.products= []; // Clear la liste de produits du localstorage, le php prend le relais pour aller valider le panier en bdd.
        this.save();
        this.update();
    }


}
