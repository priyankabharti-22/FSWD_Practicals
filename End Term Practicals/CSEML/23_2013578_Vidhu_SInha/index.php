<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <form action = "insert.php" method = "POST">
        Enter Book Name <input type = "text" name = "bname"> <br>
        <br>
        Enter Author Name <input type = "text" name = "aname"> <br>
        <br>
        Enter Isbn Number <input type = "text" name = "isbnno" > <br>
        <br>
        Enter Publisher Name <input type = "text" name = "pname" > <br>
        <br>
        Enter Publication Year     
            <select name="Year" id="" name = "pyear">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select><br>
            <br>
            Number of pages: <input type="number" min="200" max="400" name = "noofpages">
            <br>
            <br>
            <input type="radio" id="action" name="booktype" value="action">
            <label for="action">Action</label><br>
            <input type="radio" id="adventure" name="booktype" value="adventure">
            <label for="adventure">Adventure</label><br>
            <input type="radio" id="classics" name="booktype" value="classics">
            <label for="classics">Classics</label><br>
            <input type="radio" id="comicbook" name="booktype" value="comicbook">
            <label for="comicbook">Comic Book</label><br>
            <input type="radio" id="graphicnovel" name="booktype" value="graphicnovel">
            <label for="graphicnovel">Graphic Novel</label><br>
            <input type="radio" id="detective" name="booktype" value="detective">
            <label for="detective">Detective</label><br>
            <input type="radio" id="mystery" name="booktype" value="mystery">
            <label for="mystery">Mystery</label><br>
            <input type="radio" id="hfiction" name="booktype" value="historical fiction">
            <label for="historical fiction">Historical Fiction</label><br>
            <input type="radio" id="horror" name="booktype" value="horror">
            <label for="horror">Horror</label><br>
            <input type="radio" id="lfiction" name="booktype" value="literary fiction">
            <label for="literary fiction">Literary Fiction</label><br>
        </body>
    </form>
</html>