
//document.location.reload(true);

const items = [
    {
        id:0,
        nome:'FiveM 1',
        img:'fiveM.png',
        descrição:`Ram: 3gb <br> Cores: 2<br> Ssd: 50gb ` ,
        quantidade:0,
        valor:9.99,
    },
    {
        id:1,
        nome:'FiveM 2',
        img:'fiveM.png',
        descrição:`Ram: 5gb <br> Cores: 4<br> Ssd: 70gb ` ,
        quantidade:0,
        valor:16,
    },
    {
        id:2,
        nome:'FiveM 3',
        img:'fiveM.png',
        descrição:`Ram: 12gb <br> Cores: 6<br> Ssd: 95gb ` ,
        quantidade:0,
        valor:25,
    },
    {
        id:3,
        nome:'FiveM 4',
        img:'fiveM.png',
        descrição:`Ram: 16gb <br> Cores: 8<br> Ssd: 130gb ` ,
        quantidade:0,
        valor:40,
    },
    {
        id:4,
        nome:'FiveM 5',
        img:'fiveM.png',
        descrição:`Ram: 32gb <br> Cores: 12<br> Ssd: 180gb ` ,
        quantidade:0,
        valor:60,
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