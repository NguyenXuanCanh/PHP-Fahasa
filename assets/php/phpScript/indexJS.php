<script>
    function renderContentItem(id) {
        //     document.getElementById("ratingItemInfo").innerHTML = `
        //     <div class="row">
        //         <div class="col-4">
        //             <img src="./assets/img/image_198719.jpg" alt="" class="w-100">
        //         </div>
        //         <div class="col-8 ">
        //             <h6>Từ điển tiếng "${id}"</h6>
        //             <p class="author" id="author">Tác giả: khotudien</p>
        //             <p class="nxb" id="nxb">Nhà xuất bản: NXB phụ nữ Việt Nam</p>
        //             <p class="price" id="price">55,200 đ</p>
        //             <p class="book__content" id="content">Lorem, ipsum dolor sit amet consectetur
        //                 adipisicing elit. Maxime labore unde aspernatur rem non alias asperiores
        //                 temporibus perferendis a, voluptatem, sit consectetur corrupti vel molestias
        //                 itaque quia! Expedita, at assumenda.</p>
        //         </div>
        //     </div>
        // `
    }
    renderContentItem('em');
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