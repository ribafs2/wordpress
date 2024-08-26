<?php
/**
* Plugin Name: Agendamento via Whatsapp
* Plugin URI: https://www.escolaninjawp.com.br
* Description: Este plugin possibilita o agendamento via whatsapp
* Version: 1.0
* Author: Escola Ninja WP
* Author URI: https://www.escolaninjawp.com.br
**/




function orcamento_whatsapp(){ 
    
    $nome = $_POST['nome'];
    $email = $_POST['meu_email'];
    $produto = $_POST['prod'];
    
    $texto_whats = "Olá Meu nome é *" . $nome . "* desejo um orçamento para o " .$produto . " Meu e-mail é  ".  $email;   

    $msg_whats = str_replace(' ', '%20', $texto_whats);

    //Insira aqui o seu numero de Whatsapp
    $whats_app = "55";
    $action_url = "http://api.whatsapp.com/send?1=pt_BR&phone=$whats_app&text=$msg_whats";

  
    ?>


<?php if(isset($_POST['submit'])){ ?>

    <script type="text/javascript">
    window.location = "<?php echo $action_url; ?>";
    </script>   
    <?php } ?>


    <form action="" method="post">
    <label for="">Nome</label>
    <input type="text" name="nome">

    <label for="">Email</label>
    <input type="text" name="meu_email">

    <label for="">Qual produto você quer comprar</label>

    <select name="prod" id="">
        <option value="curso de WordPress">Curso de WordPress</option>
        <option value="Quero aprender a criar plugins">Quero aprender a criar plugins</option>
        <option value="Quero aprender a criar temas">Quero aprender a criar temas</option>
    </select>

    <input type="submit" name="submit" value="Pedir Orçamento">


    </form>

<?php
}
add_shortcode('orcamento','orcamento_whatsapp');