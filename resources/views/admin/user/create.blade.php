<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-6"> <!-- lebar kolom-->
            <div class="card">
                <div class="card-body">
                    <h4><b>Tambah Data</b></h4>
                    
                    <form action="/admin/user" method="POST">
                        @csrf    
                        <!-- sebagai pengaman  agar tidak bisa di akses oleh aplikasi lain -->
                        <div class="form-group">
                            <label for=""><b>Nama Lengkap</b></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap"> 

                            @error('name')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                            @enderror 
                        </div>


                        
                        <div class="form-group">
                            <label for=""><b>Email</b></label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email"> 

                            
                            @error('email')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                            <label for=""><b>Password</b></label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password"> 

                            @error('password')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                            @enderror 
                        </div>
                    

                        <div class="form-group">
                            <label for=""><b>Konfirmasi Password</b></label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Konfirmasi Password"> 


                            @error('password_confirmation')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                            @enderror 
                        </div>
                        <a href="/admin/user" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Kembali</a>                                                           
                        <button type="submit" class="btn btn-primary">Simpan</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>