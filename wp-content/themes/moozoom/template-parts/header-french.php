<?php

/**
 * @var array $args
 */

$url = $args['url'];
$active = $args['active'];
?>
									<a href="<?=$url;?>">
										<div class="flex items-center <?php echo( $active ? '@:click="open = true"' : ''); ?>">										
											<svg width="28" height="20" viewBox="0 0 28 20" fill="none"
												xmlns="http://www.w3.org/2000/svg" class="mr-4">
												<rect x="0.25" y="0.25" width="27.5" height="19.5" rx="1.75" fill="white"
													stroke="#F5F5F5" stroke-width="0.5"/>
												<mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
													y="0" width="28" height="20">
													<rect x="0.25" y="0.25" width="27.5" height="19.5" rx="1.75"
														fill="white" stroke="white" stroke-width="0.5"/>
												</mask>
												<g mask="url(#mask0)">
													<rect x="18.6667" width="9.33333" height="20" fill="#F44653"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M0 20H9.33333V0H0V20Z"
														fill="#1035BB"/>
												</g>
											</svg>
											Français
										</div>
									</a>