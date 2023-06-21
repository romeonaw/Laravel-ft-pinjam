@extends('layouts.default')
@section('content')

    <div class="hero-wrap js-fullheight" style="background-image: url('vendor/technext/vacation-rental/images/bg-1-new.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Selamat datang di FT Pinjam</h2>
          	<h1 class="mb-4">Pinjam ruangan mudah dan cepat</h1>
            <p><a href="http://ft.unsoed.ac.id/" class="btn btn-success">Pelajari lebih lanjut</a> <a href="mailto:ft@unsoed.ac.id" class="btn btn-white">Hubungi kami</a></p>
          </div>
        </div>
      </div>
    </div>

    <section id="form-pinjam-ruang" class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form method="POST" action="{{ route('api.v1.borrow-room-with-college-student', []) }}" class="appointment-form">
                            @csrf
							<h3 class="mb-3">Pinjam ruang disini</h3>
                            {{-- Show any errors --}}
                            @if ($errors->isNotEmpty())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    @foreach ($errors->all() as $message)
                                        @if ($message == 'login_for_more_info')
                                            <a href="{{ route('admin.login') }}">Masuk</a> untuk meilihat aktivitas peminjaman.
                                        @else
                                            {{ $message }}<br>
                                        @endif
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Pinjam ruang berhasil, silahkan cek status peminjaman <a href="{{ route('admin.login') }}">disini</a>. Masuk menggunakan username dan password NIM.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input name="full_name" value="{{ old('full_name') }}" type="text" class="form-control" placeholder="Nama Lengkap">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input id="borrow_at" name="borrow_at" value="{{ old('borrow_at') }}" type="text" class="form-control appointment_date-check-in datetimepicker-input" placeholder="Tgl Mulai" data-toggle="datetimepicker" data-target="#borrow_at">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input id="until_at" name="until_at" value="{{ old('until_at') }}" type="text" class="form-control appointment_date-check-out datetimepicker-input" placeholder="Tgl Selesai" data-toggle="datetimepicker" data-target="#until_at">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="room" id="" class="form-control">
	                      	<option value="" selected disabled>Pilih ruangan</option>
                            @forelse ($data['rooms'] as $room)
                                <option value="{{ $room->id }}" @if(old('room') == $room->id) selected @endif>
                                    {{ $room->room_type->name . ' - ' . $room->name }}
                                </option>
                            @empty
                                <option value="" disabled>Belum ada ruangan yang tersedia</option>
                            @endforelse
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="lecturer" id="" class="form-control">
	                      	<option value="" selected disabled>Pilih dosen</option>
                            @forelse ($data['lecturers'] as $lecturer)
                                <option value="{{ $lecturer->id }}" @if(old('lecturer') == $lecturer->id) selected @endif>
                                    {{ $lecturer->name }}
                                </option>
                            @empty
                                <option value="" disabled>Belum ada dosen yang terdaftar</option>
                            @endforelse
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<input name="nim" value="{{ old('nim') }}" type="text" class="form-control" placeholder="NIM">
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="study_program" id="" class="form-control">
	                      	<option value="" selected disabled>Prodi</option>
	                      	<option value="informatika" @if(old('study_program') == 'informatika') selected @endif> Informatika </option>
	                      	<option value="teknik-geologi" @if(old('study_program') == 'teknik-geologi') selected @endif>Teknik Geologi </option>
	                      	<option value="teknik-industri" @if(old('study_program') == 'teknik-industri') selected @endif>Teknik Industri </option>
	                      	<option value="teknik-sipil" @if(old('study_program') == 'teknik-sipil') selected @endif>Teknik Sipil </option>
	                      	<option value="teknik-elektro" @if(old('study_program') == 'teknik-elektro') selected @endif>Teknik Elektro</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Pinjam Ruang Sekarang" class="btn btn-success py-3 px-4">
			            </div>
								</div>
							</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
          <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <h2>Tata Cara Peminjaman</h2>
            </div>
          </div>
          <div class="row ftco-animate">
            <div class="col-md-12 wrap-about">
                <div class="text-center">
                    <img src="{{ asset('vendor/vonso/Tatacarapeminjaman.png') }}" class="img-fluid" alt="...">
                  </div>
               </div>
          </div>
        </div>
      </section>

    <section class="ftco-section bg-light">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Ruangan</h2>
            <p class="justify-content-center"><a href="{{ route('rooms') }}">Lihat lebih banyak ruangan disini.</a></p>
          </div>
        </div>
			</div>
		</section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Penilaian &amp; Umpan Balik</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(vendor/technext/vacation-rental/images/person_1.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Ruangannya besar dan bagus</p>
                    <p class="name">Nur Arif Wijaksono</p>
                    <span class="position">Mahasiswa Informatika</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(vendor/technext/vacation-rental/images/person_2.jpeg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Ruangannya memiliki fasilitas lengkap buat pembelajaran</p>
                    <p class="name">Niken Ayu Wijaya</p>
                    <span class="position">Mahasiswa Informatika</span>
                  </div>
                </div>
              </div>
             
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(vendor/technext/vacation-rental/images/person_3.png)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Ruangannya bersih sangat cuy</p>
                    <p class="name">Ady Septian Nugraha</p>
                    <span class="position">Mahasiswa Informatika</span>
                  </div>
                </div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </section>

   
		<section class="ftco-intro" style="background-image: c" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Siap untuk memulai</h2>
						<p class="mb-4">Mudah dan cepat pinjam ruangan secara online! Pinjam ruangan dalam satu klik atau kirim pertanyaan anda kepada kami.</p>
						<p class="mb-0"><a href="#" class="btn btn-success px-4 py-3">Pinjam sekarang</a> <a href="mailto:ft@unsoed.ac.id" class="btn btn-white px-4 py-3">Kontak kami</a></p>
					</div>
				</div>
			</div>
		</section>

    

    <!-- Modal -->
    <div class="modal fade" id="borrowRoomModal" tabindex="-1" role="dialog" aria-labelledby="borrowRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="borrowRoomModalLabel">Pinjam Ruang - Nama Ruang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('api.v1.borrow-room-with-college-student', []) }}" class="appointment-form">
                    @csrf
                    <div class="row">
                        {{-- Hidden input for room_id --}}
                        <input id="room" name="room" type="hidden" value="{{ old('room') }}">
                        <div class="col-md-12">
                            <div class="form-group">
                            <input name="full_name" type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-md-calendar"></span></div>
                        <input name="borrow_at" type="text" class="form-control appointment_date-check-in" placeholder="Tgl Mulai">
                    </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-md-calendar"></span></div>
                        <input name="until_at" type="text" class="form-control appointment_date-check-out" placeholder="Tgl Selesai">
                    </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <div class="form-field">
                          <div class="select-wrap">
                  <select name="lecturer" id="" class="form-control">
                      <option value="" selected disabled>Pilih dosen</option>
                    @forelse ($data['lecturers'] as $lecturer)
                        <option value="{{ $lecturer->id }}">
                            {{ $lecturer->name }}
                        </option>
                    @empty
                        <option value="" disabled>Belum ada dosen yang terdaftar</option>
                    @endforelse
                  </select>
                </div>
                  </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <input name="nim" type="text" class="form-control" placeholder="NIM">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <div class="form-field">
                          <div class="select-wrap">
                  <select name="study_program" id="" class="form-control">
                      <option value="" selected disabled>Prodi</option>
                      <option value="informatika"> Informatika </option>
                      <option value="teknik-geologi">Teknik Geologi</option>
                      <option value="teknik-industri">Teknik Industri </option>
                      <option value="teknik-sipil">Teknik Sipil </option>
                      <option value="teknik-elektro">Teknik Elektro</option>
                  </select>
                </div>
                  </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <input type="submit" value="Pinjam Ruang Sekarang" class="btn btn-success">
            </form>
            </div>
        </div>
        </div>
    </div>

    @section('scripts')
        <script>
            //triggered when modal is about to be shown
            $(document).on('click', '#buttonBorrowRoomModal', function() {

                var roomName = $(this).data('room-name');
                var roomId = $(this).data('room-id');

                // Change value room
                $('input[name="room"]').val(roomId);

                // change title modal
                $('#borrowRoomModalLabel').text('Pinjam Ruang - ' + roomName);

                // Rest form modal
                resetBorrowRoomModalForm()
            });

            function resetBorrowRoomModalForm(){
                $('#borrowRoomModal').find('input[name="full_name"]').val('');
                $('#borrowRoomModal').find('input[name="borrow_at"]').val('');
                $('#borrowRoomModal').find('input[name="until_at"]').val('');
                $('#borrowRoomModal').find('select[name="lecturer"]').val($('select[name="lecturer"] option:first').val());
                $('#borrowRoomModal').find('input[name="nim"]').val('');
                $('#borrowRoomModal').find('select[name="study_program"]').val($('select[name="study_program"] option:first').val());
            }
        </script>

        {{-- If any error scroll to form --}}
        @if ($errors->isNotEmpty())
            <script>
                $(document).ready(function(){
                    // Scroll only in mobile device
                    if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                        document.getElementById("form-pinjam-ruang").scrollIntoView();
                    }
                });
            </script>
        @endif
    @endsection
@endsection
