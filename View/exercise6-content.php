<!-- Exercise JavaScript II -->

<div class='student-response'>
<str>Find IT from exercise 7</str>
  <?php
    session_start();
    if(isset($_POST['Name'])){
    $_SESSION["name_input"] = trim(htmlentities($_POST['Name']));
    echo "<p> The name is: {$_SESSION['name_input']}</p>";}
    else echo "<p> There was a problem :( </p>"

  ?>
</div>

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
  <!-- Place Answer Here -->
    <label for ="sides_input"> Number of Sides</label>
    <input id="sides_input"> <br> <br>
    <label for ="rolls_input"> Number of Rolls</label>
    <input id="rolls_input">
    <button id="button" onClick="outcome(document.getElementById('sides_input').value, document.getElementById('rolls_input').value )">Enter</button>
    <p id="end"></p>
    <script>

      //Place Class Here (It's best to create classes outside the scope of functions to avoid creating a class with each click, rather than an object)
      class Dice
      {
        //constructor
        constructor (user_sides)
        {
          this.sides = user_sides;
        }      

        dice_roll() 
            {
            var myRandom = Math.floor(Math.random() * this.sides) + 1;
            return myRandom;          
          }        
             
      }; //end of class

      function outcome(user_sides, user_rolls)
      { 
        // variables
          var die = new Dice(user_sides);
          var final = 0;
          var strConcatDiceRolls = "";
          var result = 0;
        // variables

        // Loop dice rolls
          for(i=0; i < user_rolls; i++) {
            result = die.dice_roll();
            strConcatDiceRolls += result + ", ";
            final += result;     
          } 
        // Loop dice rolls
        
        document.getElementById("end").innerHTML = strConcatDiceRolls + "Total = " + final;
             };
    </script>

    </div>

  

  <!-- Place Answer Here -->

  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
    <!-- Place Answer Here -->
    <label for ="f1_sides_input"> How Many Sides?</label>
    <input id="f1_sides_input"> <br> <br>
    <label for ="f1_rolls_input"> How Many Times Do You Want To Roll?</label>
    <input id="f1_rolls_input"> <br>
    <label for ="f1_cheat_input"> What Number Would You Like Rolled?</label>
    <input id="f1_cheat_input">
    <button id="f1_button" onClick="outcome(document.getElementById('f1_sides_input').value, document.getElementById('f1_rolls_input').value, document.getElementById('f1_cheat_input').value )">Enter</button>
    <p id="f1_end"></p>
    <script>

      //Class
      class f1_Dice
      {
        //constructor
        constructor (f1_user_sides)
        {
          this.sides = f1_user_sides;
        }      

        dice_roll() 
            {
            var myRandom = Math.floor(Math.random() * this.sides) + 1;
            return myRandom;          
          }        
             
      }; //end of class

      function outcome(f1_user_sides, f1_user_rolls, f1_user_cheat)
      { 
        // variables
          var die = new f1_Dice(f1_user_sides);
          var final = 0;
          var strConcatDiceRolls = "";
          var result = 0;
        // variables

        // Loop dice rolls
          for(i=0; i < f1_user_rolls; i++) {
            result = die.dice_roll();
            strConcatDiceRolls += result + ", ";
            final += result;     
          } 
        // Loop dice rolls
        
        document.getElementById("f1_end").innerHTML = strConcatDiceRolls + "Total = " + final;
      };

    </script>

  </div>


    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->
    <label for ="user_name"> Username</label>
    <input id="user_name"> <br> <br>
    <!-- <label for ="password"> Password</label>
    <input id="password" , document.getElementById('password').value> -->
    <button id="button" onClick="check(document.getElementById('user_name').value)">Enter</button>
    <p id="f2_p"></p>
    
    

    <script>

      var username_storage =  ["helloworld", "joeshmoe"];
      // var = password ["password", "123abc"]

      function check(username)
      {
        //declare boolean
        var isFound = false;

        //convert input to lowercase
        var lower_username = username.toLowerCase();

        for(index = 0; index < username_storage.length; index++)
        { if (username_storage[index] == lower_username) {
            
            //set boolean to say game is found
            isFound = true;
            }         

          }

        if(isFound)
        {
          document.getElementById("f2_p").innerHTML = "Match Found!";
        }
        else {
          document.getElementById("f2_p").innerHTML = "No Match :(";
        }

        }
      
      // function check(username) 
      // {
      //   switch(username) {
      //   case username_storage:
      //    document.getElementById("f2_p").innerHTML = "Welcome";
      //    break;
      //    default: 
      //     document.getElementById("f2_p").innerHTML = "Access Denied";
      // } 
      
      // }




    </script>


    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->

<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->


