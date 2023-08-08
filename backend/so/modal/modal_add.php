<div class="modal fade bd-example-modal-xl " tabindex="-1" id="modal_add" role="dialog" data-backdrop="static"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header">
                <h5 class="modal-title h2">ข้อมูลการชำระเพิ่มเติม</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="bg-light h4" name="frmAddStock" id="frmAddStock" method="POST" style="padding:20px;"
                action="javascript:void(0);">

                <div class="modal-body form-group">
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">ยอดสุทธิ</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control form-control-lg" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">รหัสสมาชิก</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg h2" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">รับเงิน</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg h2" id="">
                        </div>
                    </div>
                    <div class="form-group row font-weight-bold h4">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">เงินสด</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">โอนจ่าย</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">ยอดเงินทอน</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control form-control-lg" id="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-success" form="frmAddStock" id="btnAddSo">ยืนยัน</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>