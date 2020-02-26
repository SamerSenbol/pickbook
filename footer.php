<section class="Newsletter">
    <div >

    <div class="container">
      <h1>Learn about new offers and get more deals by joining our Newsletter</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <table>
        
      <tr>
      <td><label for="email"><b>Email   </b></label> </td>
      <td> <input type="text" placeholder="Enter Email" name="emailForNewsLetter" required></td>
      </tr>
      <tr>
      <td><label for="psw"><b>Name   </b></label></td>
      <td><input type="text" placeholder="Enter Your Name" name="nameForNewsLetter" required></td>
      </tr>
      </table>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <div class="clearfix">
        <button type="submit" onclick="sendNewsletter()" class="signupbtn">Subscribe</button>
      </div>

      <table>
            <tr>
            <td><label for="email"><b>Email   </b></label> </td>
            <td><input type="text" placeholder="Enter Your email" name="deleteOneEmail"></td>
            </tr>
      </table>
      <div>
          <button type="submit" onclick="deletNewsletter()" class="signupbtn" >Unsubscribe</button>
      </div>
      <br>

    </div>
    <div class="container" style="padding-top:40px;">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"><button class="btn btn-success btn-lg" onclick="window.location.href='register.php'">Signup</button></div>
    </div>
    </div>
    </section>
    
    <footer>
        <div class="footer">
            <p>2020 All Rights Reserved By Group4</p>
        </div>
    </footer>
</body>

</html>