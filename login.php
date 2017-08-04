<?include("header.php")?>
<div class="content">
    <div class="container-fluid">
        <?include("breadcrumb.php")?>
        <h1 class="title">Регистрация</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputSurname" class="col-sm-3 control-label">Фамилия</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputSurname" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Имя</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPatronymic" class="col-sm-3 control-label">Отчество</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPatronymic" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputBirth" class="col-sm-3 control-label">Дата рождения</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputBirth" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTel" class="col-sm-3 control-label">Номер телефона</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="inputTel" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="">
                        </div>
                    </div>
                    <?/*поле с ошибкой добавляется класс has-error*/?>
                    <div class="form-group has-error">
                        <label for="inputPassword4" class="col-sm-3 control-label">Подтверждение пароля</label>
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
                        <div class="col-sm-offset-3 col-sm-9"><p class=help-block">Все поля являются обязательными для заполнения. Для регистрации Вы должны быть старше 16 лет</p></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default">Регистрация</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?include("footer.php")?>