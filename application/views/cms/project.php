
<style>
    .error{
        font-size: 1em;
        color: #e74a3b;
    }
</style>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $pagetitle ?></h1>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <?php if ($this->session->flashdata('success')) {?>
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <?= $this->session->flashdata('success') ?>
                </div>
            </div>
            <?php } ?>
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <!-- <h6 class="m-0 font-weight-bold text-primary">RFID</h6> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProject">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                </button>
                <div class="dropdown no-arrow">     
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Urutan</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                foreach ($project as $key) {?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key->nama ?></td>
                                <td><?= $key->category ?></td>
                                <td><?= $key->description ?></td>
                                <td><?= $key->urutan ?></td>
                                <td> <img src="<?= base_url('public/assets/img/').$key->image ?>" alt="" width="220" height="150"></td>
                                <td style="width:20%">
                                    <button type="button" class="btn btn-warning" onclick="editProject('<?= $key->id ?>')">
                                        <i class="fa fa-edit fa-sm text-white-50"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="deleteProject(<?= $key->id ?>,'<?= $key->nama ?>')">
                                        <i class="fa fa-trash fa-sm text-white-50"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addProject" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah PROJECT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action='<?= base_url('cms/') ?>project/addProject' enctype="multipart/form-data" accept-charset="utf-8" class="user" id="addFormProject">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama..." required>
                    </div>
                    <div class="form-group">
                        <label for="cat">Category</label>
                        <select  class="form-control" name="cat" id="cat" required>
                            <option value="">-- Pilih Category --</option>
                            <?php foreach ($category as $key) {?>
                            <option value="<?= $key->id ?>"><?= $key->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc">description</label>
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="Enter description..." required>
                    </div>
                    <div class="form-group">
                        <label for="urutan">Urutan</label>
                        <input type="text" class="form-control" id="urutan" name="urutan" placeholder="Enter Urutan..." required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editProject" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action='<?= base_url('cms/') ?>project/editProject' enctype="multipart/form-data" accept-charset="utf-8" class="user" id="editFormProject">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama2">Nama</label>
                        <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter nama..." required>
                        <input type="text" class="form-control" id="nama2" name="nama2" placeholder="Enter nama..." required>
                    </div>
                    <div class="form-group">
                        <label for="cat">Category</label>
                        <select  class="form-control" name="cat2" id="cat2" required>
                            <option value="">-- Pilih Category --</option>
                            <?php foreach ($category as $key) {?>
                            <option value="<?= $key->id ?>"><?= $key->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc">description</label>
                        <input type="text" class="form-control" id="desc2" name="desc2" placeholder="Enter description..." required>
                    </div>
                    <div class="form-group">
                        <label for="urutan2">Urutan</label>
                        <input type="text" class="form-control" id="urutan2" name="urutan2" placeholder="Enter Urutan..." required>
                    </div>
                    <label for="imagex">Image Exist</label>
                    <div class="form-group">
                        <img src="" alt="" id="imagex" name="imagex" width="220" height="150">
                    </div>
                    <div class="form-group">
                        <label for="image2">Image</label>
                        <input type="file" class="form-control" id="image2" name="image2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    $('#dataTable').DataTable({})

    $('#addFormProject').validate({
        rules: {
            nama: {
                required: true
            },
            cat: {
                required: true
            },
            desc: {
                required: true
            },
            image: {
                required: true
            },
            urutan: {
                required: true
            }
        },
        messages: {
            nama: {
                required: "Masukan Nama",
            },
            cat: {
                required: "Pilih Category"
            },
            desc: {
                required: "Masukan Description"
            },
            image: {
                required: "Masukan Image"
            },
            urutan: {
                required: "Masukan Urutan"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

        submitHandler: function (form) {
            form.submit();
        }
    });

    $('#editFormProject').validate({
        rules: {
            nama2: {
                required: true
            },
            cat2: {
                required: true
            },
            desc2: {
                required: true
            },
            urutan2: {
                required: true
            }
        },
        messages: {
            nama2: {
                required: "Masukan Nama",
            },
            cat2: {
                required: "Pilih Category"
            },
            desc2: {
                required: "Masukan Description"
            },
            urutan2: {
                required: "Masukan Urutan"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

        submitHandler: function (form) {
            setTimeout(function () {
                form.submit();
            }, 500)            
        }
    });

    function editProject(project){
        $('#editProject').modal()
        $.ajax({
            dataType: "json",
            type: 'POST', 
            url: '<?= base_url() ?>cms/project/cekProject',
            data: {
                project: project
            },
            success: function(response) { 
	            response = response[0];
                
                $("#imagex").attr("src","<?= base_url('public/assets/img/') ?>"+response.image);
                $('#id').val(response.id)
                $('#nama2').val(response.nama)
                $('#desc2').val(response.description)
                $('#urutan2').val(response.urutan)
                $('#cat2 option[value="'+response.category_id+'"]').prop('selected', true);
            },
            error: function() {
                alert('error')
            }
        });
    }

    function deleteProject(id, project){
        Swal.fire({
            title: 'Warning',
            text: "Anda yakin menghapus Project "+ project,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) { 
                $.ajax({            
                    dataType: "json",
                    type: 'POST', 
                    url: '<?= base_url() ?>cms/project/deleteProject',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response == 'Berhasil') { 
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Berhasil Hapus Project '+ project,
                                showConfirmButton: false,
                                timer: 1500
                            })
                            reload()
                        }else{
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Gagal Hapus Project '+ project,
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } 
                    },
                    error: function() {  
                        alert('error')
                    }
                }); 
            }
        })
    }

    function reload() {  
        setTimeout(function() {
            window.location.reload();
        }, 1000);
    }
</script>