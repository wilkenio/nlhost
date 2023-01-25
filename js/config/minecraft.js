
//document.location.reload(true);

const items = [
    {
        id:0,
        nome:'Name Product',
        img:'minecraft.png',
        descrição:` - Ram: 4gb <br> - Cores: 2  <br> - Ssd: 50gb ` ,
        quantidade:0,
        valor:8.50,
    },
    {
        id:1,
        nome:'Name Product',
        img:'minecraft.png',
        descrição:` - Ram: 6gb <br> - Cores: 4  <br> - Ssd: 70gb ` ,
        quantidade:0,
        valor:12.50,
    },
    {
        id:2,
        nome:'Name Product',
        img:'minecraft.png',
        descrição:` - Ram: 8gb <br> - Cores: 6  <br> - Ssd: 100gb ` ,
        quantidade:0,
        valor:16,
    },
    {
        id:3,
        nome:'Name Product',
        img:'minecraft.png',
        descrição:` - Ram: 16gb <br> - Cores: 8  <br> - Ssd: 150gb ` ,
        quantidade:0,
        valor:25,
    },
]

inicializarloja = () =>{
    var produtos = document.querySelector("#planos")
    items.map((val)=>{
       produtos.innerHTML+=`
       <div class="plano" id="plano-1"><img src="img/`+val.img+`" alt="">
            <h1><span>`+val.nome+`</span></h1>
            <h4>`+val.descrição+`</h4>
            <h1>€`+val.valor+`/month</h1><button class="adicionarcar" key="`+val.id+`">Purchase <i class="fa fa-shopping-cart"></i></button>
        </div>`
    })
}
inicializarloja()

atualizarcarrinho = () =>{
    //console.log(items)
    document.querySelector("#carrinho").innerHTML=""
    //localStorage.clear()
    items.map((val)=>{
      
        if(val.quantidade > 0){
        document.querySelector("#carrinho").innerHTML+=val.nome + val.quantidade

        var nameProduct = val.nome
        var valueProduct = val.valor
        var descriptionProduct = val.descrição

    $.ajax({
        type: "POST",
        url: "cpu/atualizar_carrinho.php",
    data: { nomeProduto: nameProduct, valorProduto:valueProduct, descricaoProduto:descriptionProduct},
        dataType: "text",
        success: function (response) {
           //rederecionando pro carrinho
           if(response.match("successfully")){
            window.location.href = "carrinho.php";
            
           }
        }
        
    });
        }
    })
}

var links = document.getElementsByClassName("adicionarcar")

for(var i = 0; i < links.length; i++){
    links[i].addEventListener("click",function(){
        let key = this.getAttribute('key');
        items[key].quantidade++;
        atualizarcarrinho()
    })
}