<!doctype html>
<html>
	<head>
		<title>Welcome to InfluX</title>

		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	</head>
	<body>

		<style {csp-style-nonce}>
			div.logo {
				height: 200px;
				width: 155px;
				display: inline-block;
				opacity: 0.08;
				position: absolute;
				top: 2rem;
				left: 50%;
				margin-left: -73px;
			}
			body {
				height: 100%;
				background: #fafafa;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				color: #777;
				font-weight: 300;
			}
			h1 {
				font-weight: lighter;
				letter-spacing: 0.8rem;
				font-size: 3rem;
				margin-top: 145px;
				margin-bottom: 0;
				color: #222;
			}
			.wrap {
				max-width: 1024px;
				margin: 5rem auto;
				padding: 2rem;
				background: #fff;
				text-align: center;
				border: 1px solid #efefef;
				border-radius: 0.5rem;
				position: relative;
			}
			.version {
				margin-top: 0;
				color: #999;
			}
			.guide {
				margin-top: 3rem;
				text-align: left;
			}
			pre {
				white-space: normal;
				margin-top: 1.5rem;
			}
			code {
				background: #fafafa;
				border: 1px solid #efefef;
				padding: 0.5rem 1rem;
				border-radius: 5px;
				display: block;
			}
			p {
				margin-top: 1.5rem;
			}
			.footer {
				margin-top: 2rem;
				border-top: 1px solid #efefef;
				padding: 1em 2em 0 2em;
				font-size: 85%;
				color: #999;
			}
			a:active,
			a:link,
			a:visited {
				color: dodgerblue;
			}
		</style>

		<div class="wrap">

			<h1>Welcome to InfluX</h1>

            <div class="guide">

            <li><a href="<?php echo site_url('influencer')?>">Influencers</a></li>
            <ol>
                <li><a href="<?php echo site_url('influencer/1')?>">Willis Jackson</a></li>
                <form action="<?php echo site_url('influencer/1/edit')?>" method="get">
                    <button type="submit">Edit</button>
                </form>
                <form action="<?php echo site_url('influencer/1')?>" method="post">
                    <input type="hidden" name="_method" value="put" />
                    <button type="submit">Update</button>
                </form>
                <form action="<?php echo site_url('influencer/1/delete')?>" method="post">
                    <button type="submit">Delete</button>
                </form>
                <li><a href="<?php echo site_url('influencer/2')?>">Dolan Lamoriello</a></li>
                <li><a href="<?php echo site_url('influencer/3')?>">Suzy Bae</a></li>
                <li><a href="<?php echo site_url('influencer/4')?>">Chantelle Davidson</a></li>
                <li><a href="<?php echo site_url('influencer/5')?>">Elias Pettersson</a></li>
                <li><a href="<?php echo site_url('influencer/6')?>">Aaron Vong</a></li>
                <li><a href="<?php echo site_url('influencer/6')?>">Billy Bob Karlsson</a></li>
            </ol>
            <form action="<?php echo site_url('influencer/new')?>" method="get">
                <button type="submit">New</button>
            </form>
            <form action="<?php echo site_url('influencer')?>" method="post">
                <button type="submit">Create</button>
            </form>

            <br/><br/>
                <li><a href="<?php echo site_url('business')?>">Businesses</a></li>
                <ol>
                    <li><a href="<?php echo site_url('business/1')?>">Leo Lamriello</a></li>
                    <form action="<?php echo site_url('business/1/edit')?>" method="get">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="<?php echo site_url('business/1')?>" method="post">
                        <input type="hidden" name="_method" value="put" />
                        <button type="submit">Update</button>
                    </form>
                    <form action="<?php echo site_url('business/1/delete')?>" method="post">
                        <button type="submit">Delete</button>
                    </form>
                    <li><a href="<?php echo site_url('business/2')?>">Suzie Kwan</a></li>
                    <li><a href="<?php echo site_url('business/3')?>">Tim Hortons</a></li>
                    <li><a href="<?php echo site_url('business/4')?>">Nintendo</a></li>
                    <li><a href="<?php echo site_url('business/5')?>">McDonalds</a></li>
                </ol>
                <form action="<?php echo site_url('business/new')?>" method="get">
                    <button type="submit">New</button>
                </form>
                <form action="<?php echo site_url('business')?>" method="post">
                    <button type="submit">Create</button>
                </form>

			</div>

			<div class="footer">
				Page rendered in {elapsed_time} seconds. Environment: <?= ENVIRONMENT ?>
			</div>

		</div>

	</body>
</html>
