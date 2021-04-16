<script>
    const fakeDataBook = [{
            ten: "Tactics For Ielts Listening 1",
            gia: 69000,
            discount: 0.3,
            tacGia: "PT.Tài",
            nhaXuatBan: "Văn vở",
            moTa: "cuốn sách này không có gì cả",
            namXuatBan: "2021",
            nhaCungCap: "Cảnh",
            hinhThucBia: "Bìa rách",
            danhGia: "5",
            soLuongDanhGia: "69",
            hinhChinh: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu1: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu2: "./assets/img/bookImgs/image_218832_big.jpg",
            soLuong: '',
            soLuongDaBan: '0',
            duongDanDenSingleProduct: 'product.php',
        },
        {
            ten: "Tactics For Ielts Listening 2",
            gia: 69000,
            discount: 0.3,
            tacGia: "PT.Tài",
            nhaXuatBan: "Văn vở",
            moTa: "cuốn sách này không có gì cả",
            namXuatBan: "2021",
            nhaCungCap: "Cảnh",
            hinhThucBia: "Bìa rách",
            danhGia: "5",
            soLuongDanhGia: "69",
            hinhChinh: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu1: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu2: "./assets/img/bookImgs/image_218832_big.jpg",
            soLuong: '',
            soLuongDaBan: '0',
            duongDanDenSingleProduct: 'product.php',
        },
        {
            ten: "Tactics For Ielts Listening 3",
            gia: 69000,
            discount: 0.3,
            tacGia: "PT.Tài",
            nhaXuatBan: "Văn vở",
            moTa: "cuốn sách này không có gì cả",
            namXuatBan: "2021",
            nhaCungCap: "Cảnh",
            hinhThucBia: "Bìa rách",
            danhGia: "5",
            soLuongDanhGia: "69",
            hinhChinh: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu1: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu2: "./assets/img/bookImgs/image_218832_big.jpg",
            soLuong: '',
            soLuongDaBan: '0',
            duongDanDenSingleProduct: 'product.php',
        },
        {
            ten: "Tactics For Ielts Listening 4",
            gia: 69000,
            discount: 0.3,
            tacGia: "PT.Tài",
            nhaXuatBan: "Văn vở",
            moTa: "cuốn sách này không có gì cả",
            namXuatBan: "2021",
            nhaCungCap: "Cảnh",
            hinhThucBia: "Bìa rách",
            danhGia: "5",
            soLuongDanhGia: "69",
            hinhChinh: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu1: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu2: "./assets/img/bookImgs/image_218832_big.jpg",
            soLuong: '',
            soLuongDaBan: '0',
            duongDanDenSingleProduct: 'product.php',
        },
        {
            ten: "Tactics For Ielts Listening 5",
            gia: 69000,
            discount: 0.3,
            tacGia: "PT.Tài",
            nhaXuatBan: "Văn vở",
            moTa: "cuốn sách này không có gì cả",
            namXuatBan: "2021",
            nhaCungCap: "Cảnh",
            hinhThucBia: "Bìa rách",
            danhGia: "5",
            soLuongDanhGia: "69",
            hinhChinh: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu1: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu2: "./assets/img/bookImgs/image_218832_big.jpg",
            soLuong: '',
            soLuongDaBan: '0',
            duongDanDenSingleProduct: 'product.php',
        },
        {
            ten: "Tactics For Ielts Listening 6",
            gia: 69000,
            discount: 0.3,
            tacGia: "PT.Tài",
            nhaXuatBan: "Văn vở",
            moTa: "cuốn sách này không có gì cả",
            namXuatBan: "2021",
            nhaCungCap: "Cảnh",
            hinhThucBia: "Bìa rách",
            danhGia: "5",
            soLuongDanhGia: "69",
            hinhChinh: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu1: "./assets/img/bookImgs/image_218832_big.jpg",
            hinhPhu2: "./assets/img/bookImgs/image_218832_big.jpg",
            soLuong: '',
            soLuongDaBan: '0',
            duongDanDenSingleProduct: 'product.php',
        },
    ]





    function renderProductList() {
        let renderHere = document.getElementById("renderListProductHere");
        let content = ``;
        for (let product of fakeDataBook) {
            content += `
            <div class="col-3">
                <a href="${product.duongDanDenSingleProduct}">
                    <div class="item flash__sale__item">
                        <img src="${product.hinhChinh}" alt="" class="w-100">
                        <h6>${product.ten}</h6>
                        <div class="sale__price">${(product.gia * (1-product.discount)).toLocaleString()}đ</div>
                        <div class="default__price">${(product.gia).toLocaleString()}đ</div>
                    </div>
                </a>
            </div>
            `
        }
        renderHere.innerHTML = content;
    }
    renderProductList();

    document.getElementById("navLogin").onclick = () => {
        document.getElementById("loginZone").setAttribute("style", "display:block !important;margin-top:14%");
        document.getElementById("overlay").setAttribute("style", "background-color: rgba(0,0,0,0.3); width: 100% ; height: 100% ; position: fixed; z-index: 10; display: block");
    }
    let closeLogin = document.getElementsByClassName("closeLogin");
    for (let element of closeLogin) {
        element.addEventListener("click", () => {
            document.getElementById("loginZone").setAttribute("style", "display:none;");
            document.getElementById("overlay").setAttribute("style", "display: none");
        })
    }
</script>