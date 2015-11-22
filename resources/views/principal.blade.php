<!-- Main Content -->
<style>
    .codigo{font-size: 12px; border: 1px solid;padding: 10px; width: 70%;}
    .codigo .coment{color: #0000C2;} 
    .codigo .comando{color: #269abc;} 
    .codigo span{display: block;}
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Constantes no PHP
                    </h2>
                </a>                    
            </div>
            <hr>
            <div class="container-fluid">
                <p>
                    O que é uma constante? É exatamente o contrário de uma variável.. E o que é uma variável? “Uma coisa que varia!”
                    Constantes são “variáveis fixas”, capazes de armazenar um valor (de quase todos os tipos) mas que não podem ser 
                    redefinidos, modificados ou removidos… Eles são constantes e permanecem como são até o final da execução do script.
                </p>
                <h3 id="segundo-a-documentao"></h3>
                <p style='font-style:italic; border-left: 2px solid;padding-left: 5px;'>
                    Uma constante é um identificador (nome) para um único valor. Como o nome sugere, esse valor não pode mudar durante a 
                    execução do script (exceção às constantes mágicas, que não são constantes de verdade). As constantes são sensíveis ao 
                    caso por padrão. Por convenção, o nomes de constantes são sempre em maiúsculas. O nome de uma constante tem as mesmas 
                    regras de qualquer identificador no PHP. Um nome de constante válida começa com uma letra ou sublinhado, seguido por 
                    qualquer número de letras, números ou sublinhados. 
                </p>
                <p>
                    ### Criando constantes
                    Pra criar uma constante é bem simples, você usa a função define() que pede dois argumentos: primeiro o nome da constante 
                    e depois o seu valor, exemplos:
                </p>

                <div class="codigo">
                    <span>&lt;?php</span>
                    <span>define('SITE', 'Joao Lucas / Blog');</span>
                    <span>define('site', 2);</span>
                </div>
                <p>
                    No código acima definimos DUAS constantes diferentes, com dois valores diferentes. O nome das constantes é “case-sensitive” 
                    isso significa que “SITE” é diferente de “site” que são diferente de “sItE” e por aí vai.
                </p>
                <h3>Usando constantes</h3>
                <p>
                    O uso de uma constante é identico ao uso de uma variável, diferença é que você não tem um cifrão ($) na frente do nome da 
                    constante, por exemplo:
                </p>
                <div class="codigo">
                    <span>&lt;?php</span>
                    <span>define('SITE', 'Joao Lucas / Blog');</span>
                    <span>echo "Seja bem vindo ao site " . SITE;</span>
                    <span class="coment">// Seja bem vindo ao site Joao Lucas / Blog</span>
                    <span class="coment">// Outra forma:</span>
                    <span>$mensagem = <code>"Seja bem-vindo ao site"</code>;</span>
                    <span><code>echo</code> $mensagem . ' ' . SITE;</span>
                    <span class="coment">// Seja bem vindo ao site Joao Lucas / Blog</span>
                </div>

                <p><strong style="color: red">Atenção:</strong> Se você tentar definir uma mesma constante - mais de uma vez - receberá uma mensagem de erro. Afinal, ela é uma 
                    constante e não pode ser definida novamente.
                </p>
                <h3> Recebendo o valor de uma constante </h3>
                <p>
                    Normalmente para receber o valor de uma constante é só usar o seu nome como foi mostrado no exemlpo anterior, mas e se o nome da constante é dinâmico (está dentro de uma variável)?
                </p>
                <p>
                    Vamos a um exemplo básico, suponhamos que você tenha um script que cria uma constante em função do nome do visitante, você poderia fazer assim:    
                </p>

                <div class="codigo">
                    <span>&lt;?php</span>
                    <span class="coment">$cargo = <code> 'dono'</code>;</span>
                    <span>$nome = <code>'Thiago Belem'</code>;</span>
                    <span class="coment">// Cria uma constante 'dono' com o valor 'Joao Lucas'</span>
                    <span class="comando">define(<b class="coment">$cargo, $nome</b>);</span><br>
                    <span class="coment">echo "O " . $cargo . " do blog é o " . dono . "!";</span>
                    <span class="coment">// O dono do blog é o Joao Lucas!</span>
                </div>

                <hr>

            </div>
        </div>
    </div>
