<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> FeelReal Admin </title>
    <link href="http://93.119.155.54:1100/css/style.css?ver=05092019" rel="stylesheet">
    <link href="http://93.119.155.54:1100/css/reset.css" rel="stylesheet">
    <link rel="stylesheet" href="http://93.119.155.54:1100/css/jquery.fancybox.min.css"/>
</head>
<body>
<header class="header ">
    <div class="header__wrap row">
        <span class="header__name">FeelReal Admin Panel</span>
        <span class="header__title">Запахи</span>
        <a href="/logout"><img src="http://93.119.155.54:1100/img/Admin.svg" alt="Logout"></a>
    </div>
</header>
<div class="row content">
    <div class="sidebar">
        <div class="sidebar__heading">
            <img src="http://93.119.155.54:1100/img/avatar.svg" alt="Avatar" class="sidebar__avatar">
            <span>Добро пожаловать, admin</span>
        </div>
        <a class="sidebar__menu"><img src="http://93.119.155.54:1100/img/menu.svg" alt="Menu-open"></a>
        <ul class="sidebar__list">
            <li>
                <a href="/" class="sidebar__link">Главная</a>
                <a href="/smells" class="sidebar__link">Запахи</a>
                <a href="/categories" class="sidebar__link">Категории</a>
            </li>
        </ul>
    </div>
    <div class="main">

        <div class="main__wrap" id="primary">
            <h2 class="main__title">Список запахов</h2>
            <a href="/smells/add" data-fancybox="" class="main__button">Добавить запах</a>
            <div class="main__container">
                <table class="main__table ">
                    <tr class=" row  main__inner smells">
                        <th class="main__name">ИД</th>
                        <th class="main__name">Имя</th>
                        <th class="main__name">Slug</th>
                        <th class="main__name">Описание</th>
                        <th class="main__name">Категория</th>
                        <th class="main__name">Большая иконка</th>
                        <th class="main__name">Маленькая иконка</th>
                        <th class="main__name">QR коды</th>
                        <th class="main__name">Дата создания</th>
                        <th class="main__name">Дата обновления</th>
                        <th class="main__name">Действие</th>
                    </tr>
                    @foreach($smells as $smell)
                        <tr class=" row  main__inner main__info smells">
                            <td>{{$smell->id}}</td>
                            <td>{{$smell->name}}</td>
                            <td>{{$smell->slug}}</td>
                            <td>{{$smell->description}}</td>
                            <td>{{$smell->category_name}}</td>
                            <td><img src="storage/app/{{$smell->big_icon}}" alt="Иконка"></td>
                            <td><img src="storage/app/{{$smell->small_icon}}" alt="Иконка"></td>
                            <td>
                                Чистый:
                                <a target="_blank" download="qr_code_without_logo_gunpowder.png"
                                   href="http://93.119.155.54:1100/files/perfumes/qr/clear/gunpowder.png">
                                    <img src="http://93.119.155.54:1100/img/download.svg" alt="Download">
                                </a><br>

                                С бабочкой:
                                <a target="_blank" download="qr_code_with_logo_gunpowder.png"
                                   href="http://93.119.155.54:1100/files/perfumes/qr/logo/gunpowder.png">
                                    <img src="http://93.119.155.54:1100/img/download.svg" alt="Download">
                                </a><br>

                            </td>
                            <td>{{$smell->created_at}}</td>
                            <td>{{$smell->updated_at}}</td>
                            <td class="row main__action">
                                <a href="{{route('deleteSmell', $smell->id)}}"><img
                                        src="http://93.119.155.54:1100/img/delete.svg"
                                        alt="delete"></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
