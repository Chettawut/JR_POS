<div class="modal fade bd-example-modal-xl " tabindex="-1" id="modal_add" role="dialog" data-backdrop="static"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header">
                <h5 class="modal-title">ข้อมูลการชำระเพิ่มเติม</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="bg-light" name="frmAddStock" id="frmAddStock" method="POST" style="padding:10px;"action="javascript:void(0);">
                <div class="row">
            <div class="modal-body col-8 form-group">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">ยอดชำระ</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">รับเงิน</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-body col-4">
                    <div class="col text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-success" form="frmAddStock"
                            id="btnAddSo">ยืนยัน</button>
                    </div>
                    <div>
                            <input type="text"  class="form-control" id="">
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>