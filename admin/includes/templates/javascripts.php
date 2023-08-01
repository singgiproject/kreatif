<?php error_reporting(1); ?>
<!--   Core JS Files   -->
<script src="<?= $url; ?>admin/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= $url; ?>admin/assets/js/core/popper.min.js"></script>
<script src="<?= $url; ?>admin/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= $url; ?>admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= $url; ?>admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= $url; ?>admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?= $url; ?>admin/assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?= $url; ?>admin/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= $url; ?>admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= $url; ?>admin/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= $url; ?>admin/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= $url; ?>admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?= $url; ?>admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= $url; ?>admin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= $url; ?>admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?= $url; ?>admin/assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?= $url; ?>admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?= $url; ?>admin/assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="<?= $url; ?>admin/assets/js/setting-demo.js"></script>
<script src="<?= $url; ?>admin/assets/js/demo.js?up=<?= time(); ?>"></script>

<!-- PDF -->
<script src="<?= $url; ?>assets/js/jspdf.umd.js "></script>
<script src="<?= $url; ?>assets/js/html2canvas.js"></script>
<script src="<?= $url; ?>includes/apis/address.js"></script>


<!-- MULTI FILTER SELECT -->
<script>
  $(document).ready(function() {
    $('#basic-datatables').DataTable({});

    $('#multi-filter-select').DataTable({
      "pageLength": 5,
      initComplete: function() {
        this.api().columns().every(function() {
          var column = this;
          var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo($(column.footer()).empty())
            .on('change', function() {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
              );

              column
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();
            });

          column.data().unique().sort().each(function(d, j) {
            select.append('<option value="' + d + '">' + d + '</option>')
          });
        });
      }
    });

    // Add Row
    $('#add-row').DataTable({
      "pageLength": 5,
    });

    var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $('#addRowButton').click(function() {
      $('#add-row').dataTable().fnAddData([
        $("#addName").val(),
        $("#addPosition").val(),
        $("#addOffice").val(),
        action
      ]);
      $('#addRowModal').modal('hide');

    });
  });
</script>


<!-- --------- NOTIFY --------- -->
<?php if ($_GET["pages"] === "welcome") : ?>

  <?php if ($levelSuperAdmin === $rowSession["level"]) : ?>
    <script>
      $.notify({
        icon: 'flaticon-alarm-1',
        title: '<?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?>',
        message: 'Anda masuk sebagai <b>Super Admin</b>',
      }, {
        type: 'info',
        placement: {
          from: "bottom",
          align: "right"
        },
        time: 1000,
      });
    </script>
  <?php endif; ?>

  <?php if ($levelClassA === $rowSession["level"]) : ?>
    <script>
      $.notify({
        icon: 'flaticon-alarm-1',
        title: '<?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?>',
        message: 'Anda masuk sebagai <b>Guru Kelas A</b>',
      }, {
        type: 'info',
        placement: {
          from: "bottom",
          align: "right"
        },
        time: 1000,
      });
    </script>
  <?php endif; ?>

  <?php if ($levelClassB === $rowSession["level"]) : ?>
    <script>
      $.notify({
        icon: 'flaticon-alarm-1',
        title: '<?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?>',
        message: 'Anda masuk sebagai <b>Guru Kelas B</b>',
      }, {
        type: 'info',
        placement: {
          from: "bottom",
          align: "right"
        },
        time: 1000,
      });
    </script>
  <?php endif; ?>

<?php endif; ?>


<!-- Notify Students Add-->
<?php if ($_GET["pages"] === "students-add-success" or $_GET["pages"] === "student-raports-add-success"  or $_GET["pages"] === "teacher-add-success") : ?>
  <script>
    $.notify({
      icon: 'flaticon-success',
      title: 'Sukses!',
      message: 'Satu data berhasil ditambahkan',
    }, {
      type: 'success',
      placement: {
        from: "top",
        align: "right"
      },
      time: 500,
    });
  </script>
<?php endif; ?>

<!-- Notify Students Edit-->
<?php if ($_GET["pages"] === "students-edit-success" or $_GET["pages"] === "student-raports-edit-success" or $_GET["pages"] === "teacher-edit-success") : ?>
  <script>
    $.notify({
      icon: 'flaticon-success',
      title: 'Sukses!',
      message: 'Satu data berhasil diubah',
    }, {
      type: 'success',
      placement: {
        from: "top",
        align: "right"
      },
      time: 500,
    });
  </script>
<?php endif; ?>

<!-- Notify Students Deleted-->
<?php if ($_GET["pages"] === "students-deleted-success" or $_GET["pages"] === "student-raports-deleted-success" or $_GET["pages"] === "teacher-deleted-success") : ?>
  <script>
    $.notify({
      icon: 'flaticon-success',
      title: 'Dihapus!',
      message: 'Satu data berhasil dihapus',
    }, {
      type: 'danger',
      placement: {
        from: "top",
        align: "right"
      },
      time: 500,
    });
  </script>
<?php endif; ?>
<!-- --------- end NOTIFY --------- -->


<!-- tooltip -->
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<!-- PDF Medical Records -->
<?php if ($_GET["print"] === "raports-print") : ?>
  <?php foreach ($studentRaports as $rowStudentRaports) : ?>
    <?php foreach ($students as $rowStudents) : ?>
      <?php if ($rowStudentRaports["id_siswa"] === $rowStudents["id_siswa"]) : ?>
        <?php if ($rowStudentRaports["id"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))))) : ?>
          <script>
            window.jsPDF = window.jspdf.jsPDF;
            var docPDF = new jsPDF();

            function print() {
              var elementHTML = document.querySelector("#printRaports");
              docPDF.html(elementHTML, {
                callback: function(docPDF) {
                  docPDF.save('Laporan Siswa - <?= $rowStudents["nama_lengkap"]; ?>.pdf');
                },
                x: 2,
                y: 5,
                width: 170,
                windowWidth: 650
              });
            }
          </script>
        <?php endif; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
<?php endif; ?>

<!-- Alert -->
<script>
  //== Class definition
  var SweetAlert2Demo = function() {

    //== Demos
    var initDemos = function() {
      //== Sweetalert Demo 1
      $('#alert_demo_1').click(function(e) {
        swal('Good job!', {
          buttons: {
            confirm: {
              className: 'btn btn-success'
            }
          },
        });
      });

      //== Sweetalert Show Password
      <?php foreach ($teacher as $rowTeacher) : ?>
        $('#alert_show_password<?= $rowTeacher["id"]; ?>').click(function(e) {
          swal("Password: <?= $rowTeacher["password2"]; ?>", "", {
            buttons: {
              confirm: {
                className: 'btn btn-primary'
              }
            },
          });
        });
      <?php endforeach; ?>

      //== Sweetalert Demo 3
      $('#alert_demo_3_1').click(function(e) {
        swal("Good job!", "You clicked the button!", {
          icon: "warning",
          buttons: {
            confirm: {
              className: 'btn btn-warning'
            }
          },
        });
      });

      $('#alert_demo_3_2').click(function(e) {
        swal("Good job!", "You clicked the button!", {
          icon: "error",
          buttons: {
            confirm: {
              className: 'btn btn-danger'
            }
          },
        });
      });

      $('#alert_demo_3_3').click(function(e) {
        swal("Good job!", "You clicked the button!", {
          icon: "success",
          buttons: {
            confirm: {
              className: 'btn btn-success'
            }
          },
        });
      });

      $('#alert_demo_3_4').click(function(e) {
        swal("Good job!", "You clicked the button!", {
          icon: "info",
          buttons: {
            confirm: {
              className: 'btn btn-info'
            }
          },
        });
      });

      //== Sweetalert Demo 4
      $('#alert_demo_4').click(function(e) {
        swal({
          title: "Good job!",
          text: "You clicked the button!",
          icon: "success",
          buttons: {
            confirm: {
              text: "Confirm Me",
              value: true,
              visible: true,
              className: "btn btn-success",
              closeModal: true
            }
          }
        });
      });

      $('#alert_demo_5').click(function(e) {
        swal({
          title: 'Input Something',
          html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
          content: {
            element: "input",
            attributes: {
              placeholder: "Input Something",
              type: "text",
              id: "input-field",
              className: "form-control"
            },
          },
          buttons: {
            cancel: {
              visible: true,
              className: 'btn btn-danger'
            },
            confirm: {
              className: 'btn btn-success'
            }
          },
        }).then(
          function() {
            swal("", "You entered : " + $('#input-field').val(), "success");
          }
        );
      });

      $('#alert_demo_6').click(function(e) {
        swal("This modal will disappear soon!", {
          buttons: false,
          timer: 3000,
        });
      });

      $('#alert_demo_7').click(function(e) {
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          buttons: {
            confirm: {
              text: 'Yes, delete it!',
              className: 'btn btn-success'
            },
            cancel: {
              visible: true,
              className: 'btn btn-danger'
            }
          }
        }).then((Delete) => {
          if (Delete) {
            swal({
              title: 'Deleted!',
              text: 'Your file has been deleted.',
              type: 'success',
              buttons: {
                confirm: {
                  className: 'btn btn-success'
                }
              }
            });
          } else {
            swal.close();
          }
        });
      });

      $('#alert_demo_8').click(function(e) {
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          buttons: {
            cancel: {
              visible: true,
              text: 'No, cancel!',
              className: 'btn btn-danger'
            },
            confirm: {
              text: 'Yes, delete it!',
              className: 'btn btn-success'
            }
          }
        }).then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
              buttons: {
                confirm: {
                  className: 'btn btn-success'
                }
              }
            });
          } else {
            swal("Your imaginary file is safe!", {
              buttons: {
                confirm: {
                  className: 'btn btn-success'
                }
              }
            });
          }
        });
      })

    };

    return {
      //== Init
      init: function() {
        initDemos();
      },
    };
  }();

  //== Class Initialization
  jQuery(document).ready(function() {
    SweetAlert2Demo.init();
  });
</script>


<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace('visi');
  CKEDITOR.replace('misi');
  CKEDITOR.replace('add_description_about');

  <?php foreach ($about as $row) : ?>
    CKEDITOR.replace('edit_description_about<?= $row["id"]; ?>');
  <?php endforeach; ?>

  <?php foreach ($contact as $row) : ?>
    CKEDITOR.replace('edit_description_address<?= $row["id"]; ?>');
    CKEDITOR.replace('edit_service_hours<?= $row["id"]; ?>');
  <?php endforeach; ?>

  CKEDITOR.replace('per_nilai_agama_moral');
  CKEDITOR.replace('per_motorik');
  CKEDITOR.replace('per_kognitif');
  CKEDITOR.replace('per_bahasa');
  CKEDITOR.replace('per_sosial_emosional');
  CKEDITOR.replace('per_seni');

  <?php foreach ($studentRaports as $rowStudentRaports) : ?>
    CKEDITOR.replace('per_nilai_agama_moral<?= $rowStudentRaports["id"]; ?>');
    CKEDITOR.replace('per_motorik<?= $rowStudentRaports["id"]; ?>');
    CKEDITOR.replace('per_kognitif<?= $rowStudentRaports["id"]; ?>');
    CKEDITOR.replace('per_bahasa<?= $rowStudentRaports["id"]; ?>');
    CKEDITOR.replace('per_sosial_emosional<?= $rowStudentRaports["id"]; ?>');
    CKEDITOR.replace('per_seni<?= $rowStudentRaports["id"]; ?>');
  <?php endforeach; ?>
</script>