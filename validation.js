
 function name() {

            var name = document.getElementById("txtname").value;
            if (name == "") {
                document.getElementById("nameerror").innerHTML = "Name is Empty";
            }
            else if (!isNaN(name)) {
                document.getElementById("nameerror").innerHTML = "Name is invalid";
            }
            else {
                document.getElementById("nameerror").innerHTML = "";
                return true;
            }
        }

        function email() {


            var email = document.getElementById("txtsignemail").value;
            var atposition = email.indexOf("@");
            var dotposition = email.dotposition;
            if (email == "") {
                document.getElementById("emailerror").innerHTML = "email is empty";
            }
            else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
                document.getElementById("emailerror").innerHTML = "email is not correct";
            }
            else {
                document.getElementById("emailerror").innerHTML = "";
                return true;
            }

        }
        function password() {
            var password = document.getElementById("txtsignpass").value;
            if (password == "") {
                document.getElementById("passerror").innerHTML = "password is Empty";
            }
            else {
                document.getElementById("passerror").innerHTML = "";
                return true;
            }
        }
        function conformpassword() {
            var password = document.getElementById("txtsignpass").value;
            var confpass = document.getElementById("txtsigncpass").value;
            if (confpass == "") {
                document.getElementById("confpasserror").innerHTML = "confirm password is Empty";
            }
            else if (password != confpass) {
                document.getElementById("confpasserror").innerHTML = " password not match";
            }
            else {
                document.getElementById("confpasserror").innerHTML = "";
                return true;
            }
        }

        function number() {
            var number = document.getElementById("txtsignnumber").value;
            if (number == "") {
                document.getElementById("numbererror").innerHTML = " number is empty";
            }
            else if (number.length != 10) {
                document.getElementById("numbererror").innerHTML = " number is wrong";
            }
            else if (isNaN(number)) {
                document.getElementById("numbererror").innerHTML = " enter number value only";

            }
            else {
                document.getElementById("numbererror").innerHTML = "";
                return true;
            }
        }
        function validate() {

            name();
            email();
            number();
            password();
            conformpassword();
            if (name() && email() && number() && password() && conformpassword()) {
                return true;
            }
            else {
                return false;
            }
        }

         function loginemail() {

            var loginemail = document.getElementById("loginemail").value;
            var atposition = loginemail.indexOf("@");
            var dotposition = loginemail.dotposition;
            if (loginemail == "") {
                document.getElementById("loginemailerror").innerHTML = "email is Empty";

            }
            else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= loginemail.length) {
                document.getElementById("loginemailerror").innerHTML = "email is not correct";
            }
            else {
                document.getElementById("loginemailerror").innerHTML = "";
                return true;
            }

        }
        function loginpassword() {
            var loginpassword = document.getElementById("loginpass").value;
            if (loginpassword == "") {
                document.getElementById("loginpasserror").innerHTML = "password is Empty";
            }
            else {
                document.getElementById("loginpasserror").innerHTML = "";
                return true;
            }
        }
        function loginvalidate() {
            loginemail();
            loginpassword();

            if (loginemail() && loginpassword()) {
                return true;
            }
            else {
                return false;
            }
        }
