<?php
/**
 * news
 *
 * public/news/index.php
 */

require_once __DIR__ . '/../../include/common/controller.php';

showHeader();

echo <<<HTML

<main>
  <section>
    <header class="page-title structure--no-padding">
      <div class="inner--wide">
        <div class="heading heading--pagetitle heading--news-pagetitle articles__heading"><h2 class="heading__txt">お知らせ</h2></div>
        <!-- /.heading -->
      </div><!-- /.inner--wide -->
    </header><!-- /.structure -->

    <aside class="page-breadcrumbs structure">
      <div class="inner">
        <ul class="breadcrumbs">
          <li class="before-icon--house"><a href="{$GLOBALS['urlIndex']}">ホーム</a></li>
          <li><a href="{$GLOBALS['urlNews']}">お知らせ</a></li>
        </ul>
      </div><!-- /.inner -->
    </aside><!-- /.structure -->

    <div class="page-section structure">
      <div class="inner">
        <div class="vertical-posts vertical-posts--article">
          <div id="article1" class="id-link-wrapper">
            <article class="vertical-posts__item cf vertical-posts--article__item">
              <div class="vertical-posts__date vertical-posts--article__date"><time>2021.05.21(Fri)</time></div>
              <div class="label vertical-posts__label vertical-posts--article__label">お知らせ</div>
              <h3 class="vertical-posts__title vertical-posts--article__title">2021年6月の診療日</h3>
              <div class="vertical-posts__paragraph vertical-posts--article__paragraph">
                <p>2021年6月の診療日をお知らせいたします。<br>
                  2021年6月は通常通り診療いたします。<br>
                  よろしくお願いいたします。
              </div><!-- /.vertical-posts__paragraph -->
            </article><!-- /.vertical-posts__item -->
          </div><!-- /.id-link-wrapper -->
          <div id="article2" class="id-link-wrapper">
            <article class="vertical-posts__item cf vertical-posts--article__item">
              <div class="vertical-posts__date vertical-posts--article__date"><time>2021.04.23(Fri)</time></div>
              <div class="label vertical-posts__label vertical-posts--article__label">お知らせ</div>
              <div class="label--important vertical-posts__label">重要</div>
              <h3 class="vertical-posts__title vertical-posts--article__title">2021年5月 GW休診日</h3>
              <div class="vertical-posts__paragraph vertical-posts--article__paragraph">
                <p>GW休診日をお知らせいたします。<br>
                  2021年5月3日、4日、5日は休診いたします。<br>
                  よろしくお願いいたします。
              </div><!-- /.vertical-posts__paragraph -->
            </article><!-- /.vertical-posts__item -->
          </div><!-- /.id-link-wrapper -->
          <div id="article3" class="id-link-wrapper">
            <article class="vertical-posts__item cf vertical-posts--article__item">
              <div class="vertical-posts__date vertical-posts--article__date"><time>2021.04.01(Thu)</time></div>
              <div class="label vertical-posts__label vertical-posts--article__label">お知らせ</div>
              <div class="label--important vertical-posts__label">重要</div>
              <h3 class="vertical-posts__title vertical-posts--article__title">新型コロナ感染対策について</h3>
              <div class="vertical-posts__paragraph vertical-posts--article__paragraph">
                <p>当院では、以前からの感染症対策に加え、患者様・スタッフの検温を実施するなど強化を進め、感染しない・させないを意識して診療に取り組んでいます。<br>
                そうした中で、患者様にもお願いすることも少なからずございますので、ご協力いただきますようお願いします。
              </div><!-- /.vertical-posts__paragraph -->
            </article><!-- /.vertical-posts__item -->    
          </div><!-- /.id-link-wrapper -->
        </div><!-- /.vertical-posts -->

        <!-- WP実装時修正
        <div class="pagenation">
          <p>1234</p>
        </div>
        -->
        <!-- /.pagenation -->

      </div><!-- /.inner -->
    </div><!-- /.structure -->
  </section>
</main>

HTML;

showFooter();
