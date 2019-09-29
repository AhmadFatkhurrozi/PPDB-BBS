<div class="content login-box">
	<div class="login-main">
		<div class="wrap">
			<h1>Login</h1>
				<div class="login-left" align="center" style="margin-top: 85px">
					<a href="" 
						class="btn btn-danger btn-lg box-shadow fa fa-google-plus"> Sign in with Google
					</a>
				</div>
				<div class="login-right">
					<h3>Akun Terdaftar</h3>
					<p>Jika sudah mempunyai akun silahkan login !!!</p>
					<form action="<?php echo base_url() ?>login/autentikasi" method="post">
						<div>
							<label>Email</label>
								<input type="text" name="email" placeholder="masukkan email">
						</div>
						<div>
							<label>Password</label>
								<input type="password" name="password" placeholder="masukkan password">
						</div>
							<p><a href="">Lupa Kata Sandi ?</a><br></p>
							<input type="submit" value="Login" />
					</form>
						<p>Belum mempunyai akun ?<a href=""> Buat akun baru</a></p>
				</div>
				<div class="clear"> </div>
		</div>
	</div>
</div>