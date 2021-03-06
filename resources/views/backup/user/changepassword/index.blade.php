@extends('layouts.argon')

@section('title-text','ย้อนกลับ')
@section('title-link','/home')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title mb-0 text-muted">เปลี่ยนรหัสผ่าน</h3>
				</div>
				<div class="card-body">
					<form action="/user/changepassword" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label for="old-password">รหัสผ่านปัจจุบัน</label>
							<input id="old_password" name="old_password" type="password" class="form-control">
						</div>
						<div class="form-group">
							<label for="new-password">รหัสผ่านใหม่</label>
							<input id="new_password" name="new_password" type="password" class="form-control">
						</div>
						<div class="form-group">
							<label for="confirm-password">รหัสผ่านใหม่ (ยืนยัน)</label>
							<input id="confirm_password" name="confirm_password" type="password" class="form-control">
						</div>
						<button id="btn_submit" class="btn btn-primary" type="submit" disabled>บันทึก</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('#new_password').keyup(function () {
			$new_password = $('#new_password').val()
			$confirm_password = $('#confirm_password').val()
			if ($new_password == $confirm_password && $new_password != '' && $confirm_password != '') {
				$('#btn_submit').prop('disabled', false)
			} else {
				$('#btn_submit').prop('disabled', true)
			}
		});

		$('#confirm_password').keyup(function () {
			$new_password = $('#new_password').val()
			$confirm_password = $('#confirm_password').val()
			if ($new_password == $confirm_password && $new_password != '' && $confirm_password != '') {
				$('#btn_submit').prop('disabled', false)
			} else {
				$('#btn_submit').prop('disabled', true)
			}
		});
	});
</script>
@endsection