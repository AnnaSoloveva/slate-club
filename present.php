<?include("header.php")?>
<div class="content">
    <div class="container-fluid">
        <?include("breadcrumb.php")?>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <aside class="left-menu"><?include("left-menu.php")?></aside>
            </div>
            <div class="col-sm-8 col-md-9">
                <h1 class="title">Получить подарок</h1>
                <p>Бюджет на размещение специфицирует тактический целевой сегмент рынка. Стимулирование коммьюнити, суммируя приведенные примеры, методически продуцирует социометрический показ баннера. Не факт, что баннерная реклама нейтрализует бизнес-план. Product placement ускоряет имидж, признавая определенные рыночные тенденции. Согласно последним исследованиям, общество потребления переворачивает стратегический маркетинг, осознав маркетинг как часть производства.</p>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputSurname" class="col-sm-3 control-label">Поле 1</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputSurname" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Поле 2</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPatronymic" class="col-sm-3 control-label">Поле 3</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPatronymic" placeholder="">
                        </div>
                    </div>
                    <?/*поле с ошибкой добавляется класс has-error*/?>
                    <div class="form-group has-error">
                        <label for="inputPassword4" class="col-sm-3 control-label">Поле с ошибкой</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" required="required" checked="checked">Отправляя эти сведения, вы даёте согласие на обработку своих персональных данных, в соответствии с <a href="#">Политикой конфиденциальности компании</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9"><p class=help-block">Все поля являются обязательными для заполнения</p></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#result" data-goal="question-button-target">Получить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /модалка результат -->
        <div class="modal fade" id="result" tabindex="-1" aria-labelledby="result-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true"></span></button>
                        <div class="modal-title" id="result-modal">Спасибо за заявку! </div>
                        <div class="modal-text"><p class="lead">Ваши средства вернуться на ваш счет в течение 30 дней</p></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /модалка результат -->
    </div>
</div>
<?include("footer.php")?>