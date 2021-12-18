<footer class="activity">
    <div class="footer-container">

        <div class="footer-item" style="display : table-cell;">
            <div class="progressbar">
                <div class="data-used"></div>
            </div>
            <a href="#" class="footer-link footer-text-sm">
                <div class="footer-group">
                    <span> Đã dùng 0,23 GB trong tổng số 15 GB</span>
                    <span>
                        <img src="images/icon/launch.png" style="margin-left: 15px;">
                    </span>
                </div>
            </a>
        </div>

        <div class="footer-item">
            <a href="#`" class="footer-link footer-text-sm">Điều khoản</a>
            ·
            <a href="#" class="footer-link footer-text-sm">Bảo mật</a>
            ·
            <a href="#" class="footer-link footer-text-sm">Chính sách chương trình</a>
        </div>
        <div class="footer-item" style="display : table-cell;  text-align: right;">
            <span class="footer-text-sm">Hoạt động gần đây nhất của tài khoản: 1 phút trước
            </span>
            <a href="#" class="footer-link footer-text-sm">
                <div style="margin:15px;">Chi tiết</div>
            </a>
        </div>
    </div>
</footer>

<style>
.footer-container {
    display: flex;
    flex-flow: row;
    justify-content: space-between;
    align-items: flex-start;
    margin: 16px 0;
    flex: 33% 33% 33%;
}

.footer-item {
    display: flex;
    align-items: center;
    color: var(--light-grey);
    font-size: 0.875rem;
    padding: 0;
    margin: 0;
    text-decoration: none;
    letter-spacing: 0.2px;
    user-select: none;
    flex: 1 1;
}

.progressbar {
    background-color: var(--fill-hover);
    border-radius: 10%;
    display: flex;
    height: 6px;
    width: 100%;
    max-width: 220px;
    margin-bottom: 6px;
}

.data-used {
    border-radius: 25%;
    flex-basis: 6%;
    background: rgb(105, 105, 105);
}

.footer-group {
    display: flex;
    align-items: center;
    flex: 1 1 auto;
    margin-top: 4px;
}

.footer-link {
    color: var(--light-grey);
    text-decoration: none;
    margin: 5px;
}

.footer-link:hover {
    text-decoration: underline;
}

.footer-text-sm {
    font-size: 0.75rem;
    user-select: none;
}

.text-hangout {
    font-family: var(--font);
    text-align: center;
    font-size: 13px;
    color: #737373;
    margin-top: 10px;
}
</style>