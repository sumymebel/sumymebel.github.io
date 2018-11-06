
<div class="admin0">

    <div class="admin1 admin1_1">
        <p>Administrator panel</p>
    </div>

    <div class="admin1 admin1_2">
        <div class = "button">

            <form method="LINK" action="login.php">
                <input type="submit" value="Завантажити">
            </form>

        </div>
        <div class = "button">

            <form method="LINK" action="login.php">
                <input type="submit" value="Видалити">
            </form>

        </div>
    </div>



    <div class="admin1 admin1_3">
        <form action=admin.php method=POST enctype=multipart/form-data>


            <p><b>Назва:</b></br>
                <input type="text" size="40" name="name">
            </p></br></br>
            <p><b>Вид виробу:</b></br>
                <input type="radio" name="mebel" value="1_shafa_kupe"> Шафи купе</br>
                <input type="radio" name="mebel" value="2_kuhni"> Кухні</br>
                <input type="radio" name="mebel" value="3_komody"> Комоди</br>
                <input type="radio" name="mebel" value="4_stoly"> Столи</br>
                <input type="radio" name="mebel" value="5_vitalni"> Вітальні</br>
                <input type="radio" name="mebel" value="6_spalni"> Спальні</br>
            </p></br></br>
            <p>Комментарий</br>
                <textarea name="comment" cols="40" rows="3"></textarea></p></br>
            <p><input type="reset" value="Очистити"></p></br></br>


            <p>
                <input type=file name="upload_file">
                <input type=submit value=Завантажити></p>
        </form>
    </div>


    <div class="logout">
        <div class = "button">

            <form method="LINK" action="logout.php">
                <input type="submit" value="Вихід із адмінпанелі">
            </form>

        </div>
    </div>

</div>