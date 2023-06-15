
<style>
    .bg-cover {
        background-attachment: static;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron bg-cover"
            style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.6) 0%,rgba(255,255,255,0.9) 100%), url(https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80)">
            <div class="container">
                <h1 class="display-4">{{ $data['greetings'] }}, {{ $data['admin_user_first_name'] }}!</h1>
                <p class="lead">Pinjam ruangan mudah dan cepat! Klik <a href="{{ route('admin.borrow-rooms.index') }}">disini</a> untuk lihat daftar pinjam ruang.</p>
                <hr class="my-4">
                @if ($data['is_new_admin_user'])
                    <p>
                        Sepertinya anda pengguna baru nih, ganti passwordnya dulu ya untuk alasan keamanan. Klik link dibawah
                    </p>
                    <a class="btn btn-danger btn-lg" href="{{ route('admin.setting') }}" role="button">Ganti Password</a>
                @endif

            </div>
            <!-- /.container   -->
        </div>

    </div>
</div>
