<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <title>Portfolio</title> 
</head>
<body>

    <nav class="menu">

        <div class="logo-img">
            <img src="imagens/teste_logo2.png" alt="logo2">
        </div>

        <div class="header">

            <div class="header-links">
                <div class="panqueca">
                    <a href="home.html">Home</a>
                    <a href="about.html">About</a>
                    <a href="certifications.html">Certifications</a>
                    <a href="contact.php">Contact</a>
                    <a href="cadastre.php">Login</a>
                </div>

        </div>
       

    </nav>

    <br>

    <section class="section-tabel" id="section-tabel">
    <div class="tabela">

    <h1>CONFIRA SEUS DADOS</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Sanitiza e coleta os dados do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $sexo = isset($_POST['sexo']) ? htmlspecialchars($_POST['sexo']) : "Não informado";
        $data = htmlspecialchars($_POST['data']);
        $cpf = htmlspecialchars($_POST
        ['cpf']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $cidade = htmlspecialchars($_POST['cidade']);
        $estado = htmlspecialchars($_POST['estado']);
        $nacionalidade = htmlspecialchars($_POST['nacionalidade']);
        $endereco = htmlspecialchars($_POST['endereco']);
        $bairro = htmlspecialchars($_POST['bairro']);
        $aptidoes = htmlspecialchars($_POST['aptidoes']);
        
        
         
         echo "<table>
         <tr>
             <th>Nome</th>
             <td>$nome</td>
         </tr>
         <tr>
             <th>Sexo</th>
             <td>$sexo</td>
         </tr>
         <tr>
             <th>Data de nascimento</th>
             <td>$data</td>
         </tr>
         <tr>
             <th>CPF</th>
             <td>$cpf</td>
         </tr>
         <tr>
             <th>E-mail</th>
             <td>$email</td>
         </tr>
          <tr>
             <th>Telefone</th>
             <td>$telefone</td>
         </tr>
         <tr>
             <th>Cidade</th>
             <td>$cidade</td>
         </tr>
         
         <tr>
             <th>Nacionalidade</th>
             <td>$nacionalidade</td>
         </tr>
         <tr>
             <th>Endereço</th>
             <td>$endereco</td>
         </tr>
         <tr>
             <th>Bairro</th>
             <td>$bairro</td>
         </tr>
         <tr>
             <th>Aptidões</th>
             <td>$aptidoes</td>
         </tr>
        
         
     </table>";
 } else {
     echo "<p>Erro: Você não pode acessar seu cadastro antes de realizá-lo. Tente novamente.</p>";
 }
 ?>


<br>
<br>
<br>
  

</section>

<?php 
    echo $_POST['Nome'];
    echo $POST['Data de nascimento'];
    echo $POST['CPF'];
    echo $POST['Telefone'];
    echo $POST['Cidade'];
    echo $POST['UF'];
    echo $POST['País'];
    echo $POST['Endereço'];
    echo $POST['Bairro'];
    echo $POST['Aptidões'];
    
    ?>











    <br>

<footer>
    <span class="footer-title">E&S Studio</span>
    <ul class="socials">
        <li><a href="https://wa.me/qr/KNIVFKKZMUUXH1"><i class="bi bi-whatsapp"></i></a></li>
        <li><a href="https://pt-br.facebook.com/"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://x.com/"><i class="bi bi-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/elliscarv/"><i class="bi bi-instagram"></i></a></li>
    </ul>
    <div class="info">
        <ul>
            <li class="footer-list_header">Oferece</li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="contact.html">Contato</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Documentos</li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Políticas de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Cookies</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Para você</li>
            <li><a href="#">Manuais</a></li>
            <li><a href="#">Tutoriais</a></li>
            <li><a href="#">Dicas e Truques</a></li>
            <li><a href="#">F&Q</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Trabalhe conosco</li>
            <li><a href="#">Afiliar</a></li>
            <li><a href="#">Colaborações</a></li>
            <li><a href="#">Patrocinadores</a></li>
            <li><a href="#">Parcerias</a></li>
    </div>
    <p>Copyright &copy 2025 E&S Studio. Todos os diereitos reservados. </p>
</footer>

</body>
</html>