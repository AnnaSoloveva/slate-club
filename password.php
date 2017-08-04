<?include("header.php")?>
    <div class="content">
        <div class="container-fluid">
            <?include("breadcrumb.php")?>
            <h1 class="title">Восстановление пароля</h1>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Имя</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <p>На Ваш номер телефона придет смс с восстановленным паролем</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Получить новый пароль</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?include("footer.php")?>