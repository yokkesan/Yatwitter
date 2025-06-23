<template>
    <div class="sidebar" :class="{ '--open': isSidebarOpen }">
        <button @click="toggleSidebar()" class="sidebar__tab tab" aria-label="メニューを出す" data-sidebar-tab>
            <span class="tab__icon" :class="{ '--open': isSidebarOpen }"></span>
        </button>

        <div class="sideTopLogo">
            <img src="@/components/Icons/svg/TopLogo.svg" alt="YATwitter_Logo" class="sideTopLogo" />
        </div>

        <nav class="side-nav">
            <ul class="side-nav__list">
                <li class="side-nav__item">
                    <a href="#">
                        <img src="@/components/icons/svg/ProfileIcon.svg" alt="プロフィール" class="icon" />
                        <span class="label">プロフィール</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#">
                        <img src="@/components/icons/svg/PostIcon.svg" alt="プロフィール" class="icon" />
                        <span class="label">投稿</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#">
                        <img src="@/components/icons/svg/ChatIcon.svg" alt="チャット" class="icon" />
                        <span class="label">チャット</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#">
                        <img src="@/components/icons/svg/ComyuIcon.svg" alt="コミュニティ" class="icon" />
                        <span class="label">コミュニティ</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#">
                        <img src="@/components/icons/svg/PribacyIcon.svg" alt="設定とプライバシー" class="icon" />
                        <span class="label">設定とプライバシー</span>
                    </a>
                </li>
                <li class="side-nav__item">
                    <a href="#">
                        <img src="@/components/icons/svg/SettingIcon.svg" alt="設定" class="icon" />
                        <span class="label">設定</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isSidebarOpen: false
        }
    },
    methods: {
        toggleSidebar() {
            this.isSidebarOpen = !this.isSidebarOpen;
        }
    }
}
</script>

<style lang="scss">
@import '@/assets/User/main.scss';
</style>