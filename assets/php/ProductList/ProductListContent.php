<div class="container">
    <div class="row pb-2">
        <div class="col-3 text-center productCategory text-white">
            Danh mục sản phẩm
        </div>
        <div class="col-9 text-center header__menu">
            <a href="#">
                <img src="./assets/img/ico_flashsale.png" alt="">
                Flash sale
            </a>
            <a href="#">
                <img src="./assets/img/ico_dealhot.png" alt="">
                Hot deal
            </a>
        </div>
    </div>
</div>
<div class="product__wrapper pt-3">
    <div class="product__content product__list container pt-2">
        <div class="row ml-3 mt-2">
            <div class="col-3 form-group border-right">
                <h3>Phiên chợ đồ cũ</h3>
                <span>Sắp xếp theo</span>
                <select class="form-control" name="sortBy" id="sortBy">
                    <option value="priceHighToLow">Giá từ cao đến thấp</option>
                    <option value="priceLowToHigh">Giá thừ thấp đến cao</option>
                    <option value="bestSelling">Mua nhiều nhất</option>
                    <option value="bestRating">Được đánh giá tốt nhất</option>
                </select>
                <select class="form-control mt-4" name="numberOfProductNeedRender" id="numberOfProductNeedRender">
                    <option value="12">12 sản phẩm</option>
                    <option value="24">24 sản phẩm</option>
                    <option value="48">48 sản phẩm</option>
                </select>
            </div>
            <div class="col-9">
                <div class="row" id="renderListProductHere">

                </div>
                <div class="pageDivider text-center">
                    <span class="item" id="to-prev">
                        <a href="#">
                            < </a>
                    </span>
                    <span class="item active"><a href="#">1</a></span>
                    <span class="item active"><a href="#">2</a></span>
                    <span class="item" id="to-next"><a href="#">></a></span>
                </div>
            </div>
        </div>
    </div>
</div>