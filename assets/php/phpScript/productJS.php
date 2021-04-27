<script>
    function tangGiamSoLuong(cong) {
        let soLuong = Number(document.getElementById("number__quantity").innerHTML);
        soLuong += cong;
        if (soLuong == 0) return;
        document.getElementById("number__quantity").innerHTML = soLuong;
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