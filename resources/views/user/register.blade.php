<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close modal">&times;</span>
    <form class="modal-content animate" action="{{ route('user.signup') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw-repeat"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" required>

            <label for="tel"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" required>

            <label for="role"><b>Role</b></label>
            <input type="text" name="role" value="User" readonly>

            <label for="status"><b>Status</b></label>
            <input type="text" name="status" value="Active" readonly>

            {{--<label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>--}}

            <p style="color: black">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Register</button>
            </div>
        </div>
    </form>
</div>

<div align="center">
    <strong>Admin Email:</strong> contact@samiu.me,
    <strong>Admin Email:</strong> 123
     ||
    <strong>Usar Email:</strong> test@a.com,
    <strong>Usar Email:</strong> 123
</div>
<hr>
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
