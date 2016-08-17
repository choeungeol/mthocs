<div class="page-content-inner">
    <section class="panel">
        <div class="panel-heading">
            <h3>코드그룹생성</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-50">
                        <br />
                        <!-- Horizontal Form -->
                        <form>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="group_id">코드그룹 ID</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="코드그룹ID" id="group_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label class="form-control-label" for="group_name">코드그룹명</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="코드그룹명" id="group_name">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-primary width-150">저장</button>
                                <button type="button" class="btn btn-default" ui-sref="intro">취소</button>
                            </div>
                        </form>
                        <!-- End Horizontal Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>