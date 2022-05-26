<?php

/**
 * @var array $args
 */

$url = $args['url'];
$lang = $args['lang'];

if ( $lang == 'en'): ?>
                            <a href="<?=$url;?>">
								<div class="flex items-center">									
									<svg width="28" height="20" viewBox="0 0 28 20" fill="none"
										xmlns="http://www.w3.org/2000/svg" class="mr-4">
										<rect width="28" height="20" rx="2" fill="white"/>
										<mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
											width="28" height="20">
											<rect width="28" height="20" rx="2" fill="white"/>
										</mask>
										<g mask="url(#mask0)">
											<rect width="28" height="20" fill="#0A17A7"/>
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M-1.2825 -1.9165L10.6666 6.14329V-1.33339H17.3333V6.14329L29.2824 -1.9165L30.7736 0.294263L21.3262 6.66661H28V13.3333H21.3262L30.7736 19.7056L29.2824 21.9164L17.3333 13.8566V21.3333H10.6666V13.8566L-1.2825 21.9164L-2.77368 19.7056L6.67371 13.3333H-3.14713e-05V6.66661H6.67371L-2.77368 0.294263L-1.2825 -1.9165Z"
												fill="white"/>
											<path d="M18.668 6.33219L31.3333 -2" stroke="#DB1F35" stroke-width="0.666667"
												stroke-linecap="round"/>
											<path d="M20.0127 13.6975L31.3665 21.3503" stroke="#DB1F35" stroke-width="0.666667"
												stroke-linecap="round"/>
											<path d="M8.00562 6.31042L-3.8374 -1.67102" stroke="#DB1F35" stroke-width="0.666667"
												stroke-linecap="round"/>
											<path d="M9.29012 13.6049L-3.8374 22.3104" stroke="#DB1F35" stroke-width="0.666667"
												stroke-linecap="round"/>
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M0 12H12V20H16V12H28V8H16V0H12V8H0V12Z" fill="#E6273E"/>
										</g>
									</svg>
									English
								</div>
							</a>
<?php else: ?>
									<a href="<?=$url;?>">
										<div class="flex items-center">										
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
<?php endif; ?>
