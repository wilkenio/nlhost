
//document.location.reload(true);

    const items = [
    {
        id:0,
        nome:'lapis ',
        img:'vps.png',
        descrição:'2vCPU Ryzen 7 5800X',
        quantidade:0,
        valor:5,
    },
    {
        id:1,
        nome:'short ',
        img:'vps.png',
        descrição:'2vCPU Ryzen 7 5800X',
        quantidade:0,
        valor:4,
    },
    {
        id:2 ,
        nome:'camiseta ',
        img:'vps.png',
        descrição:'2vCPU Ryzen 7 5800X',
        quantidade:0,
        valor:2,
    },
]

inicializarloja = () =>{
    var produtos = document.querySelector("#planos")
    items.map((val)=>{
       produtos.innerHTML+=`
       <div class="plano" id="plano-1"><img src="img/`+val.img+`" alt="">
            <h1><span>`+val.nome+`</span></h1>
            <h4>`+val.descrição+`</h4>
            <h1>R$`+val.valor+`/mês</h1><button class="adicionarcar" key="`+val.id+`">Adicionar ao carrinho <i class="fa fa-shopping-cart"></i></button>
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