<div class="container text-center col-md-5 card bg-info">
    <form action="add_student.php" method="post">
        <div class="form-group mt-3">
            <label for='studentname'>Type name here:</label>
            <input class="form-control" type="text" id="studentname" name="studentname" placeholder="Your Name.." required>
            <br><br>
            <label for='studentemail'>Type email here:</label>
            <input type="text" class="form-control" id="studentemail" name="studentemail" placeholder="Your Email.." required>
            <br><br>
            <label for='studentclass'>Type class here:</label>
            <input type="text" class="form-control" id="studentclass" name="studentclass" placeholder="Your Class.."required>
            <br><br>
            <input type="submit" name="submit" value="Add" style="width: 190px; margin-left: 100px; margin-right: 100px;">
        </div>
    </form>