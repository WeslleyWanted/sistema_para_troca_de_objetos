<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://localhost/sistema_de_troca_de_objetos/css/style.css" rel="stylesheet">
    <script src="http://localhost/sistema_de_troca_de_objetos/js/functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
</head>
<body>
    <?php
        session_start();//session_destroy();
        $friend="<script>document.write(friend);</script>";
        if(isset($_GET["friend"]))
            $friend=$_GET["friend"];
        
        $_SESSION["mia"]["there"][0][0]="Oi, Weslley";
        $_SESSION["mia"]["here"][0][0]="Oi, mia";
        $_SESSION["mia"]["there"][1][0]="Já tem planos para hoje à noite?";
        $_SESSION["mia"]["here"][1][0]="Não";
        $_SESSION["mia"]["here"][1][1]="Hoje eu tô livre";
        $_SESSION["mia"]["there"][2][0]="Quer jantar comigo no Leblon?";
        

        $_SESSION["julios"]["there"][0][0]="Achou que eu tava brincando?";
        $_SESSION["julios"]["here"][0][0]="Oi?";
        $_SESSION["julios"]["there"][1][0]="Quando estiver vendo tv, eu vou estar lá";
        $_SESSION["julios"]["there"][1][1]="Achou que eu tava brincando?";
        $_SESSION["julios"]["here"][1][0]="Quê";
        $_SESSION["julios"]["there"][2][0]="Quando estiver no banheiro, eu vou estar lá";
        $_SESSION["julios"]["there"][2][1]="Achou que eu tava brincando?";
        
        
        $_SESSION["chris"]["there"][0][0]="Ai, Weslley";
        $_SESSION["chris"]["here"][0][0]="Oi?";
        $_SESSION["chris"]["there"][1][0]="Eu dou uma sova naquele Capetão américa que ele nem vê";
    ?>
    <div id="barTop">
        Sistema para troca de objetos
    </div>
    <div id="barLeft">
        <div id="boxContainerIcons">
            <input type="image" 
                src="https://image.flaticon.com/icons/svg/561/561259.svg"  
                style="margin:10px;margin-left:0;" width="30" height=""/>
            <input type="image" 
                src="https://image.flaticon.com/icons/svg/727/727204.svg"  
                style="margin:10px;margin-left:0;" width="30" height=""/>
            <input type="image" 
                src="https://image.flaticon.com/icons/svg/2580/2580572.svg"  
                style="margin:10px;margin-left:0;" width="30" height=""/>
        </div>
        <div id="selectPathWay">
            Selecione o endereço do objeto
        </div>
        <div id="boxSendIcons">
            Enviar
            <div id="boxContainerIcons">  
                <input type="image"
                src="https://as2.ftcdn.net/jpg/01/83/32/39/500_F_183323950_YWL4S2C7cOZ7MKnXTleEwvkrZAO0p3GE.jpg"
                width="10" height=""/>        
            </div>
    </div>
    </div>
    <div id="barRight">
        <div id="friend" name="friend" onclick='onClick("friend",0)' onmouseover='onMouseOver("friend",0)' onmouseout='onMouseOut("friend",0)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://s2.glbimg.com/hwnZJ0JIuEZUaS96o8We1f19C3o=/smart/e.glbimg.com/og/ed/f/original/2018/11/21/44622724_295246567994048_7341763530153746375_n.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Paola Oliveira
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",1)' onmouseover='onMouseOver("friend",1)' onmouseout='onMouseOut("friend",1)'>
            <div id="photoFriend">
            <img name="friendImg" src="https://statig3.akamaized.net/bancodeimagens/by/51/42/by51424tubtkqkleymwruvh1i.jpg" width="30" height="30"/>
            </div>
            <div id="nameFriend">
                Rodrigo Hilbert
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",2)' onmouseover='onMouseOver("friend",2)' onmouseout='onMouseOut("friend",2)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://cdn-ofuxico.akamaized.net/img/upload/noticias/2019/12/29/sandra-bullock_367078_36.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Sandra Bullock (dengo)
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",3)' onmouseover='onMouseOver("friend",3)' onmouseout='onMouseOut("friend",3)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://www.men-wallpapers.com/men1/chris-lightning-world-the-thor-hemsworth-dark.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Chris Hemsworth (Thor)
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",4)' onmouseover='onMouseOver("friend",4)' onmouseout='onMouseOut("friend",4)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYX67ANzHitvqPDm1KHunmKAdelCOtJc_fgF8DVI0_QwiaeYREiv6boyGM-38aIu88AtY84BQpch9RV0_-WE8YOYytSxYLqdhX-w&usqp=CAU&ec=45690273" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Mia Khalifa
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",5)' onmouseover='onMouseOver("friend",5)' onmouseout='onMouseOut("friend",5)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://pbs.twimg.com/profile_images/981957315342434304/A1kHi7yZ.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">   
                Julios (pai do Chris)
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",6)' onmouseover='onMouseOver("friend",6)' onmouseout='onMouseOut("friend",6)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://br.jetss.com/wp-content/uploads/2019/03/giselebundchen-1024x751-696x510.jpg" width="30" height="30"/>  
            </div> 
            <div id="nameFriend">
                Gisele Bündchen
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",7)' onmouseover='onMouseOver("friend",7)' onmouseout='onMouseOut("friend",7)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://medias.fashionnetwork.com/image/upload/v1/medias/ab4a10f7679ea2c38819c8c900904f2b2943745.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Brad Pitt
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",8)' onmouseover='onMouseOver("friend",8)' onmouseout='onMouseOut("friend",8)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://br.web.img2.acsta.net/pictures/18/06/29/00/35/0101925.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Robert Downey Jr
            </div>
        </div>
        <div id="friend" name="friend" onclick='onClick("friend",9)' onmouseover='onMouseOver("friend",9)' onmouseout='onMouseOut("friend",9)'>
            <div id="photoFriend">
                <img name="friendImg" src="https://as2.ftcdn.net/jpg/00/65/77/27/500_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg" width="30" height="30"/>  
            </div>
            <div id="nameFriend">
                Perigo (Do Broklyn)
            </div>
        </div>
    </div>
    <div id="boxContainerFriendSelected">
        <div id="selectedFriend">
            <div id="selectedFriendPhoto">
                <img src="" id="selectedFriendPhotoImg"></img>
            </div>
            <div id="selectedFriendName">
                Escolha um contato da sua lista para trocar objetos
            </div>
        </div>
    </div>
    <div id="boxCenter">
        <?php
            //echo "&ensp;".$friend;
            $i=0;
            while(isset($_SESSION[$friend]["here"][$i]) || isset($_SESSION[$friend]["there"][$i])){
                $j=0;
                while(isset($_SESSION[$friend]["there"][$i][$j])){
                    ?>
                    <div id="containerObjectFriend">
                        <div id="containerImageFriendInTradeBox"><img id="imageFriendInTradeBox" name="imageFriendInTradeBox"/></div>
                        <?php
                            echo  $_SESSION[$friend]["there"][$i][$j];
                            $j++;
                        ?>
                    </div>
                    <?php
                }
                $j=0;
                while(isset($_SESSION[$friend]["here"][$i][$j])){
                    ?>
                    <div id="containerObjectMe">
                        <?php
                            echo $_SESSION[$friend]["here"][$i][$j];
                            $j++;
                        ?>
                    </div>
                    <?php      
                }
                $i++;
            }
        ?>
        <?php
            if(isset($_POST["text"])){
                ?>
                <div id="containerObjectMe">
                    <?php echo $_SESSION[$friend]["here"][$i][$j]=$_POST["text"];?>
                </div>
                <?php    
            }
            if(isset($_GET["text"])){
                ?>
                <div id="containerObjctFriend">
                    <?php echo $_SESSION[$friend]["there"][$i][$j]=$_GET["text"];?>
                </div>
                <?php 
            }
        ?>
    </div>
    <div id="boxInputObject">
        <form action="" method="post">
            <textarea placeholder="Digite uma mensagem para" name="text" value=""></textarea>
            <input type='submit' value="Enviar">
        </form>
    </div> 
    <script>
        $().ready(function(){
            $("#boxCenter").animate({ scrollTop: 1000 }, 0);
        });
        </script>
</body>
</html>