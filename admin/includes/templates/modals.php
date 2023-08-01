<!-- Modal Logout-->
<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header no-bd">
        <h2 class="modal-title">
          Keluar?
        </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin mengkahiri sesi anda saat ini?</p>
      </div>
      <div class="modal-footer no-bd">
        <form action="<?= $url; ?>dashboard/delete" method="post">
          <input hidden type="text" name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row["id"]))))))))); ?>">
          <a href="<?= $url ?>auth/logout" class="btn btn-danger">
            Keluar
          </a>
        </form>
        <button type="button" class="btn btn-info" data-dismiss="modal">Batalkan</button>
      </div>
    </div>
  </div>
</div>