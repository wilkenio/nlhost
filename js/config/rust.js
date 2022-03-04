
//document.location.reload(true);

const items = [
    {
        id:0,
        nome:'Name Product',
        img:'rust.png',
        descrição:` - Ram: 4gb <br> - Cores: 2  <br> - Ssd: 50gb ` ,
        quantidade:0,
        valor:8.50,
    },
    {
        id:1,
        nome:'Name Product',
        img:'rust.png',
        descrição:` - Ram: 4gb <br> - Cores: 2  <br> - Ssd: 50gb ` ,
        quantidade:0,
        valor:8.10,
    },
    {
        id:2,
        nome:'Name Product',
        img:'rust.png',
        descrição:` - Ram: 4gb <br> - Cores: 2  <br> - Ssd: 50gb ` ,
        quantidade:0,
        valor:8.20,
    },
    {
        id:3,
        nome:'Name Product',
        img:'rust.png',
        descrição:` - Ram: 4gb <br> - Cores: 2  <br> - Ssd: 50gb ` ,
        quantidade:0,
        valor:8.30,
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

        window.localStorage.setItem("nomeProduto",val.nome)
        window.localStorage.setItem("valorProduto",val.valor)
        window.localStorage.setItem("descricao",val.descrição)
        window.location.href = "carrinho.php";
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