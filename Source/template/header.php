<header class="header">

    <div class="header-left">
        <div class="icons">
            <button id="header-menu" class="btn header-menu tooltip" data-info="Main menu">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <a href="#" class="header-logo">
            <img src="images/logo_gmail.png" alt="Gmail_Logo">
        </a>
    </div>
    
    <form class="header-middle" action="">
        <div class="icons">
            <button id="js-header-search" class="btn tooltip" data-info="Search">
                <span class="material-icons">search</span>
            </button>
        </div>
        <input type="search" class="header-middle-input" placeholder="Tìm kiếm trong thư">
        <div class="icons">
            <button id="js-header-middle" class="btn tooltip" data-info="Search">
                <span class="material-icons">clear</span>
            </button>
        </div>
        <div class="icons">
            <button id="header-middle-options" class="btn tooltip" data-info="Options">
                <span class="material-icons">tune</span>
            </button>
        </div>
    </form>

    <div class="header-right">
        <div class="icons">
            <button id="header-support" class="btn">
                <span class="material-icons">help_outline</span>
            </button>
        </div>
        <div class="icons">
            <button id="header-settings" class="btn" data-info="Settings">
                <span class="material-icons">settings</span>
            </button>
        </div>
        <div class="icons">
            <button id="header-apps" class="btn">
                <span class="material-icons">apps</span>
            </button>
        </div>
        <div class="icons">
            <button id="header-profile" class="btn tooltip">
                <img src="images/avatar.png" class="btn-icon header-profile">
            </button>
        </div>
    </div>
</header>


<!-- CSS Header -->

<style>

.header {
	display: grid;
	grid-template-columns: 256px 1fr min-content;
	justify-content: space-between;
	align-items: center;
	grid-column-gap: 12px;
	height: 64px;
	padding: 0.15rem;
	background-color: white;
	border-bottom: 1px solid var(--fill-border);
	grid-column: 1 / 4;
}

.header-left  {
	display: flex;
	align-items: center;
	margin: 0 6px;
}

.header-middle {
	display: flex;
	align-items: center;
	justify-content: space-between;
	height: 48px;
	max-width: 720px;
	background-color: var(--fill-grey);
	border-radius: 8px;
	padding: 3px 8px;
	transition: box-shadow 350ms ease;
}

.header-middle:focus-within {
	background-color: white;
	box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.302), 0 1px 3px 1px rgba(60, 64, 67, 0.149);
        
}

input[type="search"]::-webkit-search-cancel-button {
  appearance: none;
}

.header-middle-input {
	display: block;
	font-family: var(--font);
	font-size: 15px;
	font-weight: 50;
	background-color: transparent;
	width: 100%;
	padding: 4px;
	border: none;
	outline: none;
}

.header-middle:focus-within .btn[type="reset"] {
  display: flex;
}

#header-profile {
	height: 42px;
	width: 42px;
}

.header-profile {
	height: 32px;
	width: 32px;
	opacity: 1;
}

#header-menu {
	width: 48px;
	height: 48px;
	margin: 4px;
}
.header-right  {
	display: flex;
	align-items: center;
	margin: 0 6px;
}

</style>