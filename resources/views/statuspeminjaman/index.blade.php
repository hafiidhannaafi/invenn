@include('layouts/header')
@include('layouts/navbar')
@include('layouts/sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      {{-- <h1>Data Jenis Aset</h1> --}}
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

             
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Status Peminjaman</h5>
              {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}
           
              <!-- Basic Modal -->
            <button type="button" class="btn btn"  style="background-color:  #012970; color:#FFFFFF"  data-bs-toggle="modal" data-bs-target="#basicModal">
                Tambah 
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <center><h5 class="modal-title">Input Status Peminjaman </h5> </center>

                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <form class="row g-3">
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Status</label>
                            <input type="text" class="form-control" id="inputNanme4">
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer" class ="text-center">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn"  style="background-color: #012970; color:#FFFFFF" >Save</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal--><br> <br/>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td> 
                        <button type="button" class="btn btn" style="background-color: #05b3c3; color:#FFFFFF"><i class="bi bi-pencil"></i></button>
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                 
                  </tr>
                  {{-- <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                  </tr> --}}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
@include('layouts/footer')