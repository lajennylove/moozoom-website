<?php

/**
 * @var array $args
 */

$headlines = $args['headlines'];

?>
<div class="flex flex-col text-center text-white pt-10 pb-24 px-4 md:pt-28 md:pb-28 sm:pb-40 bg-[url('../../../../uploads/2022/02/background-hero.svg')] bg-[position:top_right_16%] bg-no-repeat bg-cover">
	<div class="mx-auto my-0 max-w-7xl">
		<h1 data-cy="videoPreviewsTitle" class="mb-2 text-[2.5rem] font-semibold leading-12"><?= $headlines['headline']; ?></h1>
		<p class="font-semibold"><?= $headlines['sub_headline']; ?></p>
	</div>
</div>