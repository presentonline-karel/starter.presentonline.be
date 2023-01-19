<section class="tabs-section section fade-section">
    <div class="content-container-m content-container">
        <h2>Extra content</h2>

        <div class="tabs-container">
            <div class="tabs">
                <div class="tab active">HTML</div>
                <div class="tab">SCSS</div>
                <div class="tab">JavaScript</div>
                <div class="tab">Laravel</div>
            </div>

            <div class="tab-content-container">
                <div class="tab-content active">
                    <h3>HTML</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat.</p>
                </div>

                <div class="tab-content">
                    <h3>CSS</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat.</p>
                </div>

                <div class="tab-content">
                    <h3>JavaScript</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>

                <div class="tab-content">
                    <h3>Laravel</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat, maxime asperiores animi exercitationem ducimus rem at provident.</p>
                </div>

                <!-- Hidden placeholder tabs for dynamic height -->
                <div class="helper-tab-content">
                    <h3>HTML</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat.</p>
                </div>

                <div class="helper-tab-content">
                    <h3>CSS</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat.</p>
                </div>

                <div class="helper-tab-content">
                    <h3>JavaScript</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>

                <div class="helper-tab-content">
                    <h3>Laravel</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat, maxime asperiores animi exercitationem ducimus rem at provident.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php /*<div class="tabs">
    <div class="tab-header">
        <div class="active">Tab 1</div>
        <div>Tab 2</div>
        <div>Tab 3</div>
        <div>Tab 4</div>
    </div>

    <div class="tab-indicator">

    </div>

    <div class="tab-content">
        <div class="active">
            <h3>Tab 1 content</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat, maxime asperiores animi exercitationem ducimus rem at provident.</p>
        </div>

        <div>
            <h3>Tab 2 content</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat, maxime asperiores animi exercitationem ducimus rem at provident.</p>
        </div>

        <div>
            <h3>Tab 3 content</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat, maxime asperiores animi exercitationem ducimus rem at provident.</p>
        </div>

        <div>
            <h3>Tab 4 content</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis voluptatem harum tempora quaerat consequatur voluptate a, vel hic dolorum voluptatibus quas placeat, maxime asperiores animi exercitationem ducimus rem at provident.</p>
        </div>
    </div>
</div> */ ?>

<?= js("build/js/components/tabs.js", ["defer" => true]) ?>