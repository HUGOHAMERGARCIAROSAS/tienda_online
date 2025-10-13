@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-f4e0ec842.css') }}" media="all">
@endsection
@section('content')
    <div class="page-width top-content">
        <nav data-depth="1" class="breadcrumb">
          <ol>
            <li>
              <a href="https://alysum.promokit.eu/en/"> <span>Home</span> </a>
            </li>

            <li>
              <span>Cart</span>
            </li>
          </ol>
        </nav>
      </div>

      <div class="page-width main-content">
        <div id="wrapper" class="clearfix container">
          <div class="row">
            <div id="content-wrapper" class="content-wrapper">
              <section id="main" class="container">
                <div class="cart-grid">
                  <!-- Left Block: cart product informations & shpping -->
                  <div class="cart-grid-body">
                    <header class="page-header">
                      <h1 class="h1">Shopping Cart</h1>
                    </header>

                    <!-- cart products detailed -->
                    <div class="card cart-container">
                      <div
                        class="cart-overview js-cart"
                        data-refresh-url="//alysum.promokit.eu/en/cart?ajax=1&action=refresh"
                      >
                        <ul class="cart-items">
                          <li class="cart-item">
                            <div class="product-line-grid flex-container">
                              <!--  product left content: image-->
                              <div class="product-line-grid-left">
                                <span class="product-image media-middle">
                                  <img
                                    src="https://alysum.promokit.eu/429-home_default/printed-chiffon-dress.jpg"
                                    alt="Silk Ruffle Top"
                                    width="380"
                                    height="494"
                                    loading="lazy"
                                    class="db"
                                  />
                                </span>
                              </div>

                              <!--  product left body: description -->
                              <div class="product-line-grid-body flex-grow1">
                                <div class="product-line-info">
                                  <a
                                    class="label"
                                    href="https://alysum.promokit.eu/en/tops/18-127-printed-chiffon-dress-2835934862850.html#/1-size-s/16-color-yellow"
                                    data-id_customization="0"
                                    >Silk Ruffle Top</a
                                  >
                                </div>
                                <div
                                  class="product-line-info product-price h5 flex-container"
                                >
                                  <div class="current-price">
                                    <span class="price">$23.00</span>
                                  </div>
                                </div>

                                <h5>Product features:</h5>
                                <div class="product-line-info prod-features">
                                  <span class="label">Size:</span>
                                  <span class="value">S </span>
                                </div>
                                <div class="product-line-info prod-features">
                                  <span class="label">Color:</span>
                                  <span class="value">Yellow</span>
                                </div>

                                <h5>
                                  <span
                                    >No Customizations have been saved for this
                                    product</span
                                  >
                                </h5>
                              </div>

                              <!--  product left body: description -->
                              <div
                                class="product-line-grid-right product-line-actions flex-container"
                              >
                                <div class="qty">
                                  <input
                                    class="js-cart-line-product-quantity"
                                    data-down-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=18&amp;id_product_attribute=127&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=down"
                                    data-up-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=18&amp;id_product_attribute=127&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=up"
                                    data-update-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=18&amp;id_product_attribute=127&amp;token=7339801978b4c2a7e305df38cbbcf883"
                                    data-product-id="18"
                                    type="text"
                                    value="1"
                                    name="product-quantity-spin"
                                    min="1"
                                  />
                                </div>
                                <div class="price">
                                  <span class="product-price">
                                    <strong> $23.00 </strong>
                                  </span>
                                </div>
                                <div class="cart-line-product-actions">
                                  <a
                                    class="remove-from-cart"
                                    rel="nofollow"
                                    href="https://alysum.promokit.eu/en/cart?delete=1&amp;id_product=18&amp;id_product_attribute=127"
                                    data-link-action="delete-from-cart"
                                    data-id-product="18"
                                    data-id-product-attribute="127"
                                    data-id-customization=""
                                  >
                                    <svg class="svgic">
                                      <use
                                        href="{{asset('template/images/lib.svg#cross')}}"
                                      ></use>
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="cart-item">
                            <div class="product-line-grid flex-container">
                              <!--  product left content: image-->
                              <div class="product-line-grid-left">
                                <span class="product-image media-middle">
                                  <img
                                    src="https://alysum.promokit.eu/456-home_default/printed-chiffon-dress.jpg"
                                    alt="Cotton Cashmere Crewneck"
                                    width="380"
                                    height="494"
                                    loading="lazy"
                                    class="db"
                                  />
                                </span>
                              </div>

                              <!--  product left body: description -->
                              <div class="product-line-grid-body flex-grow1">
                                <div class="product-line-info">
                                  <a
                                    class="label"
                                    href="https://alysum.promokit.eu/en/coats/20-139-printed-chiffon-dress-2835934862852.html#/1-size-s/16-color-yellow"
                                    data-id_customization="0"
                                    >Cotton Cashmere Crewneck</a
                                  >
                                </div>
                                <div
                                  class="product-line-info product-price h5 flex-container"
                                >
                                  <div class="current-price">
                                    <span class="price">$33.50</span>
                                  </div>
                                </div>

                                <h5>Product features:</h5>
                                <div class="product-line-info prod-features">
                                  <span class="label">Size:</span>
                                  <span class="value">S </span>
                                </div>
                                <div class="product-line-info prod-features">
                                  <span class="label">Color:</span>
                                  <span class="value">Yellow</span>
                                </div>

                                <h5>
                                  <span
                                    >No Customizations have been saved for this
                                    product</span
                                  >
                                </h5>
                              </div>

                              <!--  product left body: description -->
                              <div
                                class="product-line-grid-right product-line-actions flex-container"
                              >
                                <div class="qty">
                                  <input
                                    class="js-cart-line-product-quantity"
                                    data-down-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=20&amp;id_product_attribute=139&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=down"
                                    data-up-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=20&amp;id_product_attribute=139&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=up"
                                    data-update-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=20&amp;id_product_attribute=139&amp;token=7339801978b4c2a7e305df38cbbcf883"
                                    data-product-id="20"
                                    type="text"
                                    value="1"
                                    name="product-quantity-spin"
                                    min="1"
                                  />
                                </div>
                                <div class="price">
                                  <span class="product-price">
                                    <strong> $33.50 </strong>
                                  </span>
                                </div>
                                <div class="cart-line-product-actions">
                                  <a
                                    class="remove-from-cart"
                                    rel="nofollow"
                                    href="https://alysum.promokit.eu/en/cart?delete=1&amp;id_product=20&amp;id_product_attribute=139"
                                    data-link-action="delete-from-cart"
                                    data-id-product="20"
                                    data-id-product-attribute="139"
                                    data-id-customization=""
                                  >
                                    <svg class="svgic">
                                      <use
                                        href="{{asset('template/images/lib.svg#cross')}}"
                                      ></use>
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="cart-item">
                            <div class="product-line-grid flex-container">
                              <!--  product left content: image-->
                              <div class="product-line-grid-left">
                                <span class="product-image media-middle">
                                  <img
                                    src="https://alysum.promokit.eu/434-home_default/printed-summer-dress.jpg"
                                    alt="Free People What She Said Lace Tanga Thong"
                                    width="380"
                                    height="494"
                                    loading="lazy"
                                    class="db"
                                  />
                                </span>
                              </div>

                              <!--  product left body: description -->
                              <div class="product-line-grid-body flex-grow1">
                                <div class="product-line-info">
                                  <a
                                    class="label"
                                    href="https://alysum.promokit.eu/en/women/6-31-printed-summer-dress-2835934862838.html#/1-size-s/16-color-yellow"
                                    data-id_customization="0"
                                    >Free People What She Said Lace Tanga
                                    Thong</a
                                  >
                                </div>
                                <div
                                  class="product-line-info product-price h5 flex-container"
                                >
                                  <div class="current-price">
                                    <span class="price">$30.50</span>
                                  </div>
                                </div>

                                <h5>Product features:</h5>
                                <div class="product-line-info prod-features">
                                  <span class="label">Size:</span>
                                  <span class="value">S </span>
                                </div>
                                <div class="product-line-info prod-features">
                                  <span class="label">Color:</span>
                                  <span class="value">Yellow</span>
                                </div>

                                <h5>
                                  <span
                                    >No Customizations have been saved for this
                                    product</span
                                  >
                                </h5>
                              </div>

                              <!--  product left body: description -->
                              <div
                                class="product-line-grid-right product-line-actions flex-container"
                              >
                                <div class="qty">
                                  <input
                                    class="js-cart-line-product-quantity"
                                    data-down-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=6&amp;id_product_attribute=31&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=down"
                                    data-up-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=6&amp;id_product_attribute=31&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=up"
                                    data-update-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=6&amp;id_product_attribute=31&amp;token=7339801978b4c2a7e305df38cbbcf883"
                                    data-product-id="6"
                                    type="text"
                                    value="1"
                                    name="product-quantity-spin"
                                    min="1"
                                  />
                                </div>
                                <div class="price">
                                  <span class="product-price">
                                    <strong> $30.50 </strong>
                                  </span>
                                </div>
                                <div class="cart-line-product-actions">
                                  <a
                                    class="remove-from-cart"
                                    rel="nofollow"
                                    href="https://alysum.promokit.eu/en/cart?delete=1&amp;id_product=6&amp;id_product_attribute=31"
                                    data-link-action="delete-from-cart"
                                    data-id-product="6"
                                    data-id-product-attribute="31"
                                    data-id-customization=""
                                  >
                                    <svg class="svgic">
                                      <use
                                        href="{{asset('template/images/lib.svg#cross')}}"
                                      ></use>
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="cart-item">
                            <div class="product-line-grid flex-container">
                              <!--  product left content: image-->
                              <div class="product-line-grid-left">
                                <span class="product-image media-middle">
                                  <img
                                    src="https://alysum.promokit.eu/440-home_default/printed-chiffon-dress.jpg"
                                    alt="Dark Oversize Top With Open Back Detail"
                                    width="380"
                                    height="494"
                                    loading="lazy"
                                    class="db"
                                  />
                                </span>
                              </div>

                              <!--  product left body: description -->
                              <div class="product-line-grid-body flex-grow1">
                                <div class="product-line-info">
                                  <a
                                    class="label"
                                    href="https://alysum.promokit.eu/en/women/9-89-printed-chiffon-dress-2835934862841.html#/5-color-grey"
                                    data-id_customization="0"
                                    >Dark Oversize Top With Open Back Detail</a
                                  >
                                </div>
                                <div
                                  class="product-line-info product-price h5 flex-container has-discount"
                                >
                                  <div class="product-discount">
                                    <span class="regular-price">$21.50</span>
                                    <span class="discount discount-percentage">
                                      -20%
                                    </span>
                                  </div>
                                  <div class="current-price">
                                    <span class="price">$17.20</span>
                                  </div>
                                </div>

                                <h5>Product features:</h5>
                                <div class="product-line-info prod-features">
                                  <span class="label">Color:</span>
                                  <span class="value">Grey</span>
                                </div>

                                <h5>
                                  <span
                                    >No Customizations have been saved for this
                                    product</span
                                  >
                                </h5>
                              </div>

                              <!--  product left body: description -->
                              <div
                                class="product-line-grid-right product-line-actions flex-container"
                              >
                                <div class="qty">
                                  <input
                                    class="js-cart-line-product-quantity"
                                    data-down-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=9&amp;id_product_attribute=89&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=down"
                                    data-up-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=9&amp;id_product_attribute=89&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=up"
                                    data-update-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=9&amp;id_product_attribute=89&amp;token=7339801978b4c2a7e305df38cbbcf883"
                                    data-product-id="9"
                                    type="text"
                                    value="1"
                                    name="product-quantity-spin"
                                    min="1"
                                  />
                                </div>
                                <div class="price">
                                  <span class="product-price">
                                    <strong> $17.20 </strong>
                                  </span>
                                </div>
                                <div class="cart-line-product-actions">
                                  <a
                                    class="remove-from-cart"
                                    rel="nofollow"
                                    href="https://alysum.promokit.eu/en/cart?delete=1&amp;id_product=9&amp;id_product_attribute=89"
                                    data-link-action="delete-from-cart"
                                    data-id-product="9"
                                    data-id-product-attribute="89"
                                    data-id-customization=""
                                  >
                                    <svg class="svgic">
                                      <use
                                        href="{{asset('template/images/lib.svg#cross')}}"
                                      ></use>
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="cart-item">
                            <div class="product-line-grid flex-container">
                              <!--  product left content: image-->
                              <div class="product-line-grid-left">
                                <span class="product-image media-middle">
                                  <img
                                    src="https://alysum.promokit.eu/54-home_default/printed-summer-dress.jpg"
                                    alt="Printed Summer Dress T-shirt With High Neckline"
                                    width="380"
                                    height="494"
                                    loading="lazy"
                                    class="db"
                                  />
                                </span>
                              </div>

                              <!--  product left body: description -->
                              <div class="product-line-grid-body flex-grow1">
                                <div class="product-line-info">
                                  <a
                                    class="label"
                                    href="https://alysum.promokit.eu/en/coats/5-19-printed-summer-dress-2835934862837.html#/1-size-s/16-color-yellow"
                                    data-id_customization="0"
                                    >Printed Summer Dress T-shirt With High
                                    Neckline</a
                                  >
                                </div>
                                <div
                                  class="product-line-info product-price h5 flex-container has-discount"
                                >
                                  <div class="product-discount">
                                    <span class="regular-price">$30.50</span>
                                    <span class="discount discount-percentage">
                                      -5%
                                    </span>
                                  </div>
                                  <div class="current-price">
                                    <span class="price">$28.98</span>
                                  </div>
                                </div>

                                <h5>Product features:</h5>
                                <div class="product-line-info prod-features">
                                  <span class="label">Size:</span>
                                  <span class="value">S </span>
                                </div>
                                <div class="product-line-info prod-features">
                                  <span class="label">Color:</span>
                                  <span class="value">Yellow</span>
                                </div>

                                <h5>
                                  <span
                                    >No Customizations have been saved for this
                                    product</span
                                  >
                                </h5>
                              </div>

                              <!--  product left body: description -->
                              <div
                                class="product-line-grid-right product-line-actions flex-container"
                              >
                                <div class="qty">
                                  <input
                                    class="js-cart-line-product-quantity"
                                    data-down-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=5&amp;id_product_attribute=19&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=down"
                                    data-up-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=5&amp;id_product_attribute=19&amp;token=7339801978b4c2a7e305df38cbbcf883&amp;op=up"
                                    data-update-url="https://alysum.promokit.eu/en/cart?update=1&amp;id_product=5&amp;id_product_attribute=19&amp;token=7339801978b4c2a7e305df38cbbcf883"
                                    data-product-id="5"
                                    type="text"
                                    value="1"
                                    name="product-quantity-spin"
                                    min="1"
                                  />
                                </div>
                                <div class="price">
                                  <span class="product-price">
                                    <strong> $28.98 </strong>
                                  </span>
                                </div>
                                <div class="cart-line-product-actions">
                                  <a
                                    class="remove-from-cart"
                                    rel="nofollow"
                                    href="https://alysum.promokit.eu/en/cart?delete=1&amp;id_product=5&amp;id_product_attribute=19"
                                    data-link-action="delete-from-cart"
                                    data-id-product="5"
                                    data-id-product-attribute="19"
                                    data-id-customization=""
                                  >
                                    <svg class="svgic">
                                      <use
                                        href="{{asset('template/images/lib.svg#cross')}}"
                                      ></use>
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <a
                      class="label hidden"
                      href="https://alysum.promokit.eu/en/"
                    >
                      <svg class="svgic">
                        <use
                          href="{{asset('template/images/lib.svg#arrowleft')}}"
                        ></use>
                      </svg>
                    </a>

                    <!-- shipping informations -->
                  </div>

                  <!-- Right Block: cart subtotal & cart total -->
                  <div class="cart-grid-right">
                    <div class="card cart-summary">
                      <div class="cart-detailed-totals">
                        <div class="card-block card-separator">
                          <div
                            class="cart-summary-line"
                            id="cart-subtotal-products"
                          >
                            <span class="label js-subtotal"> 5 items </span>
                            <span class="value"> $133.18 </span>
                          </div>
                          <div
                            class="cart-summary-line"
                            id="cart-subtotal-shipping"
                          >
                            <span class="label"> Shipping </span>
                            <span class="value"> $7.00 </span>
                            <div><small class="value"></small></div>
                          </div>
                        </div>

                        <div
                          class="card-block cart-summary-totals js-cart-summary-totals"
                        >
                          <div class="cart-summary-line shipping hidden">
                            <span class="label sub">Shipping</span>
                            <span class="value sub">$7.00</span>
                          </div>
                          <div class="cart-summary-line">
                            <span class="label">Total&nbsp;(tax excl.)</span>
                            <span class="value">$140.18</span>
                          </div>
                          <div class="cart-summary-line cart-total">
                            <span class="label">Total (tax incl.)</span>
                            <span class="value">$140.18</span>
                          </div>

                          <div class="cart-summary-line">
                            <span class="label sub">Taxes:</span>
                            <span class="value sub">$0.00</span>
                          </div>
                        </div>

                        <div class="block-promo">
                          <div class="cart-voucher">
                            <div
                              class="promo-code"
                              id="promo-code"
                              data-ert="Asd"
                            >
                              <form
                                action="https://alysum.promokit.eu/en/cart"
                                data-link-action="add-voucher"
                                method="post"
                                class="flex-container"
                              >
                                <input
                                  type="hidden"
                                  name="token"
                                  value="7339801978b4c2a7e305df38cbbcf883"
                                />
                                <input
                                  type="hidden"
                                  name="addDiscount"
                                  value="1"
                                />
                                <input
                                  class="promo-input flex-grow1"
                                  type="text"
                                  name="discount_name"
                                  placeholder="Promo code"
                                />
                                <button type="submit" class="btn btn-primary">
                                  Add
                                </button>
                              </form>

                              <div
                                class="alert alert-danger js-error flex-container align-items-center hidden"
                                role="alert"
                              >
                                <svg class="svgic">
                                  <use
                                    href="{{asset('template/images/lib.svg#cross')}}"></use></svg><span class="m-l-1 js-error-text"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="checkout cart-detailed-actions card-block">
                        <div class="text-xs-center">
                          <a
                            href="https://alysum.promokit.eu/en/order"
                            class="button btn btn-big"
                            >Checkout</a
                          >
                        </div>
                      </div>
                    </div>

                    <div class="blockreassurance_product">
                      <div
                        style="cursor: pointer"
                        onclick="window.open('/content/5-secure-payment')"
                      >
                        <span class="item-product">
                          <img
                            class="svg invisible"
                            src="{{asset('template/images/lock.svg')}}"
                            alt="reassuarence-icon"
                            width="30"
                            height="30"
                          />
                          &nbsp;
                        </span>
                        <p class="block-title" style="color: #000000">
                          Security Policy Edit with Customer Reassurance Module.
                        </p>
                      </div>
                      <div
                        style="cursor: pointer"
                        onclick="window.open('/content/5-secure-payment')"
                      >
                        <span class="item-product">
                          <img
                            class="svg invisible"
                            src="{{asset('template/images/rocket.svg')}}"
                            alt="reassuarence-icon"
                            width="30"
                            height="30"
                          />
                          &nbsp;
                        </span>
                        <p class="block-title" style="color: #000000">
                          Delivery Policy Edit with Customer Reassurance Module.
                        </p>
                      </div>
                      <div
                        style="cursor: pointer"
                        onclick="window.open('/content/5-secure-payment')"
                      >
                        <span class="item-product">
                          <img
                            class="svg invisible"
                            src="{{asset('template/images/back.svg')}}
                            alt="reassuarence-icon"
                            width="30"
                            height="30"
                          />
                          &nbsp;
                        </span>
                        <p class="block-title" style="color: #000000">
                          Return policy Edit with Customer Reassurance Module.
                        </p>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('content_script')
<script src="{{ asset('template/js/bottom-0418d5841.js') }}"></script>
@endsection