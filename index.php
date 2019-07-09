<?php if ( isset($_GET[ "p"]) ) { $p=$_GET[ "p"]; } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Изготовление, продажа и установка окон</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Кастомные -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- media -->
    <link href="css/media.css" rel="stylesheet" />
    <!-- font-awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-target="#navbar" data-spy="scroll">

    <div class="container-fluid page-header">
        <div class="row">
            <div class="container">
                <header>
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="text-center"><strong>Изготовление, установка окон ПВХ и алюминиевых рам</strong></h1>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <col-xs-12>
                                    <h2 class="text-center"><strong><i class="fa fa-phone text-danger"></i> +375 (29) <br class="visible-sm" /> 320-88-41</strong></h2>
                                </col-xs-12>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="btn btn-danger center-block" type="button" data-toggle="modal" data-target="#modal-wtite-to-us"><i class="fa fa-envelope-o"></i> &nbsp;Написать нам</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <nav class="container-fluid page-navigate" data-spy="affix" data-offset-top="140">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navbar navbar-inverse" id="navbar">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                                        <span class="sr-only">Открыть навигацию</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a href="." class="navbar-brand">Логотип</a>
                                </div>
                                <div class="collapse navbar-collapse" id="responsive-menu">
                                    <ul class="nav navbar-nav">
                                        <li class="visible-xs"><a href="?p=windows#windows-title">Окна</a>
                                        </li>
                                        <li class="dropdown hidden-xs">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Окна <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="?p=windows#windows-title">Окна</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="?p=windows#windows-matherials">Материал</a>
                                                </li>
                                                <li><a href="?p=windows#windows-findings">Фурнитура</a>
                                                </li>
                                                <li><a href="?p=windows#windows-lamination">Ламинация</a>
                                                </li>
                                                <li><a href="?p=windows#windows-slopes">Откосы</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="?p=windows#windows-durability">Долговечность</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="hidden-sm"><a href="?p=hblinds#hblinds-title">Жалюзи</a>
                                        </li>
                                        <li class="hidden-sm"><a href="?p=vblinds#vblinds-title">Вертикальные жалюзи</a>
                                        </li>
                                        <li class="dropdown visible-sm">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Жалюзи <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="?p=hblinds#hblinds-title">Горизонтальные</a>
                                                </li>
                                                <li><a href="?p=vblinds#vblinds-title">Вертикальные</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="?p=mosq_nets#mosq_nets-title">Маскитные сетки</a>
                                        </li>
                                        <li><a href="?p=rblinds#rblinds-title">Рулонные шторы</a>
                                        </li>
                                    </ul>
                                    <form action="" class="navbar-form navbar-right hide">
                                        <span class="navbar-phone visible-lg-inline visible-xs-inline" id="span-phone"><i class="fa fa-mobile"></i>&nbsp; +375 (29) 320-88-41</span>
                                        <div class="btn-group">
                                            <button class="btn btn-danger hidden-lg hidden-xs" type="button" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Позвоните нам" data-content="+375 (29) 320-88-41" id="popover-phone">
                                                <i class="fa fa-phone"></i>
                                            </button>
                                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modal-wtite-to-us"><i class="fa fa-envelope-o"></i>  <span class="visible-xs-inline" id="label-write-us"> &nbsp;Написать нам</span>
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?php if (isset($p)) { 
        switch ($p) { 
            case "windows": 
                include( "windows.html"); 
                break; 
            case "hblinds": 
                include( "hblinds.html"); 
                break; 
            case "vblinds": 
                include( "vblinds.html"); 
                break;
            case "mosq_nets": 
                include( "mosq_nets.html"); 
                break;
            case "rblinds": 
                include( "rblinds.html"); 
                break;
            default: 
                include( "main.html"); 
        } 
    } else { 
        include( "main.html"); 
    } ?>

    <div class="container-fluid page-footer">
        <div class="row">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-4">
                        <p>domain.by</p>
                    </div>
                    <div class="clearfix w555-visible"></div>
                    <div class="col-xs-4">
                        <p>&copy;&nbsp;Фамилия В.О.,
                            <br class="visible-sm visible-xs" />2014-2015</p>
                    </div>
                    <div class="clearfix w555-visible"></div>
                    <div class="col-xs-4">
                        <p><i class="fa fa-phone text-danger"></i> +375 (29)
                            <br class="visible-sm visible-xs" />320-88-41</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ///////////////////////////////////////////////// MODALS /////////////////////////////////////////////////////// -->

    <div class="modal fade" id="modal-wtite-to-us">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <button class="close" type="button" data-dismiss="modal">
                        <i class="fa fa-close"></i>
                    </button>
                    <h4 class="modal-title">Заполните, пожайлуста, все поля</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="result text-center lead"></div>
                            <form role="form" class="modal-form order" method="post" action="javascript:void(0);">
                                <div class="form-group">
                                    <label class="sr-only" for="inputName">Имя</label>
                                    <input type="text" class="form-control" name="inputName" placeholder="Представтесь" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inputPhone">Телефон</label>
                                    <input type="tel" class="form-control" name="inputPhone" placeholder="Введите телефон" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inputEmail">Телефон</label>
                                    <input type="email" class="form-control" name="inputEmail" placeholder="Введите email" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inputText">Телефон</label>
                                    <textarea class="form-control" rows="3" maxlength="3000" name="inputText" placeholder="Введите сообщение"></textarea>
                                </div>
                                <input type="hidden" name="inputTitle" value="Написать нам [header]" />
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary center-block form-control">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-success">
                    <p><i>«Окна под заказ»</i>
                    </p>
                    <!-- <button class="btn btn-danger" type="button" data-dismiss="modal">Отмена</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- JS/JQ -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Ajax форма отправки -->
    <script type="text/javascript" src="js/send.js"></script>

    <!-- Effects and other -->
    <script src="js/eff.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                nextEffect: 'fade',
                prevEffect: 'fade',
                padding: 0,
                margin: [15, 15, 50, 15],
                afterLoad: addLinks,
                beforeClose: removeLinks
            });
        });

        function addLinks() {
            var list = $("#links");

            if (!list.length) {
                list = $('<ul id="links">');

                for (var i = 0; i < this.group.length; i++) {
                    $('<li data-index="' + i + '"><label></label></li>').click(function() {
                        $.fancybox.jumpto($(this).data('index'));
                    }).appendTo(list);
                }

                list.appendTo('body');
            }

            list.find('li').removeClass('active').eq(this.index).addClass('active');
        }

        function removeLinks() {
            $("#links").remove();
        }
    </script>

    <!-- Yandex.Metrika counter -->
    <!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter -->
    <!-- /Google Analytics counter -->
</body>

</html>
