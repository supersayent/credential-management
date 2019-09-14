<div id="id02" class="modal2">
    <form class="modal2-content animate" action="{{ route('user.signin') }}" method="POST">
        {{ csrf_field() }}
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close2" title="Close2 modal2">&times;</span>
            {{--<img src="img_avatar2.png" alt="Avatar" class="avatar">--}}
        </div>

        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw2"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            {{--<label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>--}}
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
            <span class="psw2">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal2 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>
