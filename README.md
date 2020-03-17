# wordpress
### Projeto em wordpress



Códigos e outros materiais adicionais: https://drive.google.com/open?id=1sLf3YLFA7SkCbExAMtMqeVP83Mn-DqM1

Baixe o projeto completo *

- Banco de dados: https://drive.google.com/open?id=1nbefajAhsqzxlHNf0WyDD3MjJxwJk8n2

- Arquivos: https://drive.google.com/open?id=1ELHYW-dlN5IWZw7XZaPKZOPz3qXe61zt



* Instruções para uso do material do projeto completo

- Você deve possuir um ambiente de servidor local instalado (Wamp, Xampp, o que você desejar instalar).

- Descompacte o arquivo zip dentro de uma pasta chamada wpcurso. Não use outro nome.

- Dentro da wpcurso terá que ver os arquivos e as pastas da instalação do wp (wp_content, wp_admin etc). Ou seja, dentro da wpcurso não deverá haver outra pasta chamada wpcurso. Se fizer assim, vai dar errado.

- Instale o banco de dados pelo PHPMyAdmin com o nome de wp_banco

- Verifique o arquivo wp-config.php e veja se o nome do banco, o usuário de banco e a senha estão corretos

- O usuário da instalação do WP é marcelo e a senha é 1234567


FAQ
> https://drive.google.com/open?id=1d-Wv8uA6lzyBoS-fJRgti4Z_29Sm9X-EN6N1q46z7Zw

### Site do Xamp

> ttps://www.apachefriends.org/download.html

### Server do Xamp

> C:\xampp\htdocs

Depois de acessar o xamp e iniciar todos os servidores digite:  

> localhost/nomedapastadentrodohtdocs

Baixar o wordpress
https://br.wordpress.org/download/

Coloque dentro da pasta htdocs e renomeie para wpcurso.

Após isso acesse essa pasta e configure o wordpress.

Coloque o template baixado dentro dessa pasta.
C:\xampp\htdocs\wpcurso\wp-content\themes

Depois logue em:

http://localhost/wpcurso

É obrigatório criar o index.php e o style.css.

Dentro do Style.css, para aparecer informações mais detalhada digite:   

```
/*
Theme Name: Wordpress
Author: Franklin Roza
Description: Simples tema criado para aprender.
Version: 1.0
*/
```

Criar um arquivo e nomear para screenshot.png

Esse arquivo tem que ser 1200 x 900px

Redimensionar imagens

https://www.iloveimg.com/pt

Depois de redimensionar a imagem ative a página.


### Enfileramento - Reparar o css do tema quebrado.
### Consiste em colocar os arquivos css e js na fila

> http://localhost/wpcurso/wp-admin/themes.php

> http://localhost/wpcurso

Criar no index.php o header e o footer. (Retirar todo o css e javascript)

<?php wp_head(); ?>
<?php wp_footer(); ?>

Após criar o functions.php


```
<?php 


function load_scripts(){
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

	wp_register_script( 'jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery-two'), null, true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
```









































