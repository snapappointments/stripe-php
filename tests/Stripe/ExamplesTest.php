<?php
namespace Stripe;

final class ExamplesTest extends \PHPUnit\Framework\TestCase
{
  use TestHelper;

  /**
   * @var \Stripe\StripeClient $client
   */
  private $client;

  /**
   * @return void
   */
  function setup()
  {
    $this->client = new \Stripe\StripeClient([
      'api_key' => 'sk_test_xxx',
      'api_base' => MOCK_URL,
    ]);
  }

  /**
   * @return void
   */
  function testExamplePagination()
  {
    $this->client->customers->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleBalanceTransactionRetrieve()
  {
    $this->client->balanceTransactions->retrieve('txn_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleBalanceTransactionList()
  {
    $this->client->balanceTransactions->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateCharge()
  {
    $this->client->charges->create([
      'amount' => 2000,
      'currency' => 'usd',
      'source' => 'tok_xxxx',
      'description' => 'My First Test Charge (created for API docs)',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveCharge()
  {
    $this->client->charges->retrieve('ch_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateCharge()
  {
    $this->client->charges->update(
      'ch_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleCaptureCharge()
  {
    $this->client->charges->capture('ch_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListCharges()
  {
    $this->client->charges->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateCustomer()
  {
    $this->client->customers->create([
      'description' => 'My First Test Customer (created for API docs)',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveCustomer()
  {
    $this->client->customers->retrieve('cus_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateCustomer()
  {
    $this->client->customers->update(
      'cus_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteCustomer()
  {
    $this->client->customers->delete('cus_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListCustomers()
  {
    $this->client->customers->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveDispute()
  {
    $this->client->disputes->retrieve('dp_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateDispute()
  {
    $this->client->disputes->update(
      'dp_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleCloseDispute()
  {
    $this->client->disputes->close('dp_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListDisputes()
  {
    $this->client->disputes->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveEvent()
  {
    $this->client->events->retrieve('evt_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListEvents()
  {
    $this->client->events->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveFile()
  {
    $this->client->files->retrieve('file_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListFiles()
  {
    $this->client->files->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateFileLink()
  {
    $this->client->fileLinks->create(['file' => 'file_xxxxxxxxxxxxx']);
  }

  /**
   * @return void
   */
  function testExampleRetrieveFileLink()
  {
    $this->client->fileLinks->retrieve('link_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateFileLink()
  {
    $this->client->fileLinks->update(
      'link_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListFileLinks()
  {
    $this->client->fileLinks->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveMandate()
  {
    $this->client->mandates->retrieve('mandate_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCreatePaymentIntent()
  {
    $this->client->paymentIntents->create([
      'amount' => 2000,
      'currency' => 'usd',
      'payment_method_types' => ['card'],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrievePaymentIntent()
  {
    $this->client->paymentIntents->retrieve('pi_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdatePaymentIntent()
  {
    $this->client->paymentIntents->update(
      'pi_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleConfirmPaymentIntent()
  {
    $this->client->paymentIntents->confirm(
      'pi_xxxxxxxxxxxxx',
      ['payment_method' => 'pm_card_visa']
    );
  }

  /**
   * @return void
   */
  function testExampleCapturePaymentIntent()
  {
    $this->client->paymentIntents->capture('pi_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCancelPaymentIntent()
  {
    $this->client->paymentIntents->cancel('pi_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListPaymentIntents()
  {
    $this->client->paymentIntents->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateSetupIntent()
  {
    $this->client->setupIntents->create(['payment_method_types' => ['card']]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveSetupIntent()
  {
    $this->client->setupIntents->retrieve('seti_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateSetupIntent()
  {
    $this->client->setupIntents->update(
      'seti_xxxxxxxxxxxxx',
      ['metadata' => ['user_id' => '3435453']]
    );
  }

  /**
   * @return void
   */
  function testExampleConfirmSetupIntent()
  {
    $this->client->setupIntents->confirm(
      'seti_xxxxxxxxxxxxx',
      ['payment_method' => 'pm_card_visa']
    );
  }

  /**
   * @return void
   */
  function testExampleCancelSetupIntent()
  {
    $this->client->setupIntents->cancel('seti_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListSetupIntents()
  {
    $this->client->setupIntents->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreatePayout()
  {
    $this->client->payouts->create(['amount' => 1100, 'currency' => 'usd']);
  }

  /**
   * @return void
   */
  function testExampleRetrievePayout()
  {
    $this->client->payouts->retrieve('po_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdatePayout()
  {
    $this->client->payouts->update(
      'po_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListPayouts()
  {
    $this->client->payouts->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCancelPayout()
  {
    $this->client->payouts->cancel('po_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCreateProduct()
  {
    $this->client->products->create([
      'name' => 'T-shirt',
      'type' => 'good',
      'description' => 'Comfortable cotton t-shirt',
      'attributes' => ['size', 'gender'],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveProduct()
  {
    $this->client->products->retrieve('prod_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateProduct()
  {
    $this->client->products->update(
      'prod_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListProducts()
  {
    $this->client->products->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleDeleteProduct()
  {
    $this->client->products->delete('prod_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCreateRefund()
  {
    $this->client->refunds->create(['charge' => 'ch_xxxxxxxxxxxxx']);
  }

  /**
   * @return void
   */
  function testExampleRetrieveRefund()
  {
    $this->client->refunds->retrieve('re_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateRefund()
  {
    $this->client->refunds->update(
      're_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListRefunds()
  {
    $this->client->refunds->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateCardToken()
  {
    $this->client->tokens->create([
      'card' => [
        'number' => '4242424242424242',
        'exp_month' => 5,
        'exp_year' => 2021,
        'cvc' => '314',
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleCreateBankAccountToken()
  {
    $this->client->tokens->create([
      'bank_account' => [
        'country' => 'US',
        'currency' => 'usd',
        'account_holder_name' => 'Jenny Rosen',
        'account_holder_type' => 'individual',
        'routing_number' => '110000000',
        'account_number' => '000123456789',
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleCreatePiiToken()
  {
    $this->client->tokens->create(['pii' => ['id_number' => '000000000']]);
  }

  /**
   * @return void
   */
  function testExampleCreateAccountToken()
  {
    $this->client->tokens->create([
      'account' => [
        'individual' => ['first_name' => 'Jane', 'last_name' => 'Doe'],
        'tos_shown_and_accepted' => true,
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleCreatePersonToken()
  {
    $this->client->tokens->create([
      'person' => [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'relationship' => ['owner' => true],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveToken()
  {
    $this->client->tokens->retrieve('tok_xxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCreatePaymentMethod()
  {
    $this->client->paymentMethods->create([
      'type' => 'card',
      'card' => [
        'number' => '4242424242424242',
        'exp_month' => 5,
        'exp_year' => 2021,
        'cvc' => '314',
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrievePaymentMethod()
  {
    $this->client->paymentMethods->retrieve('pm_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdatePaymentMethod()
  {
    $this->client->paymentMethods->update(
      'pm_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListPaymentMethods()
  {
    $this->client->paymentMethods->all([
      'customer' => 'cus_xxxxxxxxxxxxx',
      'type' => 'card',
    ]);
  }

  /**
   * @return void
   */
  function testExampleCustomerAttachPaymentMethod()
  {
    $this->client->paymentMethods->attach(
      'pm_xxxxxxxxxxxxx',
      ['customer' => 'cus_xxxxxxxxxxxxx']
    );
  }

  /**
   * @return void
   */
  function testExampleCustomerDetachPaymentMethod()
  {
    $this->client->paymentMethods->detach('pm_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCustomerCreateBankAccount()
  {
    $this->client->customers->createSource(
      'cus_xxxxxxxxxxxxx',
      ['source' => 'btok_xxxxxxxxxxxxx']
    );
  }

  /**
   * @return void
   */
  function testExampleCustomerRetrieveBankAccount()
  {
    $this->client->customers->retrieveSource(
      'cus_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleCustomerUpdateBankAccount()
  {
    $this->client->customers->updateSource(
      'cus_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleCustomerVerifyBankAccount()
  {
    $this->client->customers->verifySource(
      'cus_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      ['amounts' => [32, 45]]
    );
  }

  /**
   * @return void
   */
  function testExampleCustomerDeleteBankAccount()
  {
    $this->client->customers->deleteSource(
      'cus_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleCustomerListBankAccounts()
  {
    $this->client->customers->allSources(
      'cus_xxxxxxxxxxxxx',
      ['object' => 'bank_account', 'limit' => 3]
    );
  }

  /**
   * @return void
   */
  function testExampleCreateCard()
  {
    $this->client->customers->createSource(
      'cus_xxxxxxxxxxxxx',
      ['source' => 'tok_xxxx']
    );
  }

  /**
   * @return void
   */
  function testExampleRetrieveCard()
  {
    $this->client->customers->retrieveSource(
      'cus_xxxxxxxxxxxxx',
      'card_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdateCard()
  {
    $this->client->customers->updateSource(
      'cus_xxxxxxxxxxxxx',
      'card_xxxxxxxxxxxxx',
      ['name' => 'Jenny Rosen']
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteCard()
  {
    $this->client->customers->deleteSource(
      'cus_xxxxxxxxxxxxx',
      'card_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleListCards()
  {
    $this->client->customers->allSources(
      'cus_xxxxxxxxxxxxx',
      ['object' => 'card', 'limit' => 3]
    );
  }

  /**
   * @return void
   */
  function testExampleRetrieveSource()
  {
    $this->client->sources->retrieve('src_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateSource()
  {
    $this->client->sources->update(
      'src_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleCreateCheckoutSession()
  {
    $this->client->checkout->sessions->create([
      'success_url' => 'https://example.com/success',
      'cancel_url' => 'https://example.com/cancel',
      'payment_method_types' => ['card'],
      'line_items' => [
        [
          'name' => 'T-shirt',
          'description' => 'Comfortable cotton t-shirt',
          'amount' => 1500,
          'currency' => 'usd',
          'quantity' => 2,
        ],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveCheckoutSession()
  {
    $this->client->checkout->sessions->retrieve('cs_test_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListCheckoutSessions()
  {
    $this->client->checkout->sessions->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateCoupon()
  {
    $this->client->coupons->create([
      'percent_off' => 25,
      'duration' => 'repeating',
      'duration_in_months' => 3,
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveCoupon()
  {
    $this->client->coupons->retrieve('25_5OFF', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateCoupon()
  {
    $this->client->coupons->update(
      'co_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteCoupon()
  {
    $this->client->coupons->delete('co_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListCoupons()
  {
    $this->client->coupons->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExamplePreviewCreditNote()
  {
    $this->client->creditNotes->preview([
      'invoice' => 'in_xxxxxxxxxxxxx',
      'lines' => [
        [
          'type' => 'invoice_line_item',
          'invoice_line_item' => 'il_xxxxxxxxxxxxx',
          'quantity' => 1,
        ],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleCreateCreditNote()
  {
    $this->client->creditNotes->create([
      'invoice' => 'in_xxxxxxxxxxxxx',
      'lines' => [
        [
          'type' => 'invoice_line_item',
          'invoice_line_item' => 'il_xxxxxxxxxxxxx',
          'quantity' => 1,
        ],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveCreditNote()
  {
    $this->client->creditNotes->retrieve('cn_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateCreditNote()
  {
    $this->client->creditNotes->update(
      'cn_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleCreditNoteLines()
  {
    $this->client->creditNotes->allLines('cn_xxxxxxxxxxxxx', ['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleVoidCreditNote()
  {
    $this->client->creditNotes->voidCreditNote('cn_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListCreditNotes()
  {
    $this->client->creditNotes->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateCustomerBalanceTransaction()
  {
    $this->client->customers->createBalanceTransaction(
      'cus_xxxxxxxxxxxxx',
      ['amount' => -500, 'currency' => 'usd']
    );
  }

  /**
   * @return void
   */
  function testExampleRetrieveCustomerBalanceTransaction()
  {
    $this->client->customers->retrieveBalanceTransaction(
      'cus_xxxxxxxxxxxxx',
      'cbtxn_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdateCustomerBalanceTransaction()
  {
    $this->client->customers->updateBalanceTransaction(
      'cus_xxxxxxxxxxxxx',
      'cbtxn_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListCustomerBalanceTransactions()
  {
    $this->client->customers->allBalanceTransactions(
      'cus_xxxxxxxxxxxxx',
      ['limit' => 3]
    );
  }

  /**
   * @return void
   */
  function testExampleCreateTaxId()
  {
    $this->client->customers->createTaxId(
      'cus_xxxxxxxxxxxxx',
      ['type' => 'eu_vat', 'value' => 'DE123456789']
    );
  }

  /**
   * @return void
   */
  function testExampleRetrieveTaxId()
  {
    $this->client->customers->retrieveTaxId(
      'cus_xxxxxxxxxxxxx',
      'txi_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteTaxId()
  {
    $this->client->customers->deleteTaxId(
      'cus_xxxxxxxxxxxxx',
      'txi_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleListTaxIds()
  {
    $this->client->customers->allTaxIds('cus_xxxxxxxxxxxxx', ['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateInvoice()
  {
    $this->client->invoices->create(['customer' => 'cus_xxxxxxxxxxxxx']);
  }

  /**
   * @return void
   */
  function testExampleRetrieveInvoice()
  {
    $this->client->invoices->retrieve('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateInvoice()
  {
    $this->client->invoices->update(
      'in_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteInvoice()
  {
    $this->client->invoices->delete('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleFinalizeInvoice()
  {
    $this->client->invoices->finalizeInvoice('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExamplePayInvoice()
  {
    $this->client->invoices->pay('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleSendInvoice()
  {
    $this->client->invoices->sendInvoice('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleVoidInvoice()
  {
    $this->client->invoices->voidInvoice('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleMarkUncollectibleInvoice()
  {
    $this->client->invoices->markUncollectible('in_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListInvoices()
  {
    $this->client->invoices->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateInvoiceitem()
  {
    $this->client->invoiceItems->create([
      'customer' => 'cus_xxxxxxxxxxxxx',
      'amount' => 2500,
      'currency' => 'usd',
      'description' => 'One-time setup fee',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveInvoiceitem()
  {
    $this->client->invoiceItems->retrieve('ii_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateInvoiceitem()
  {
    $this->client->invoiceItems->update(
      'ii_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteInvoiceitem()
  {
    $this->client->invoiceItems->delete('ii_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListInvoiceitems()
  {
    $this->client->invoiceItems->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreatePlan()
  {
    $this->client->plans->create([
      'amount' => 5000,
      'currency' => 'usd',
      'interval' => 'month',
      'product' => ['name' => 'Gold special'],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrievePlan()
  {
    $this->client->plans->retrieve('gold', []);
  }

  /**
   * @return void
   */
  function testExampleUpdatePlan()
  {
    $this->client->plans->update(
      'gold',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeletePlan()
  {
    $this->client->plans->delete('gold', []);
  }

  /**
   * @return void
   */
  function testExampleListPlans()
  {
    $this->client->plans->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateSubscription()
  {
    $this->client->subscriptions->create([
      'customer' => 'cus_xxxxxxxxxxxxx',
      'items' => [['plan' => 'gold']],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveSubscription()
  {
    $this->client->subscriptions->retrieve('sub_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateSubscription()
  {
    $this->client->subscriptions->update(
      'sub_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleCancelSubscription()
  {
    $this->client->subscriptions->cancel('sub_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListSubscriptions()
  {
    $this->client->subscriptions->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateSubscriptionItem()
  {
    $this->client->subscriptionItems->create([
      'subscription' => 'sub_xxxxxxxxxxxxx',
      'plan' => 'gold',
      'quantity' => 2,
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveSubscriptionItem()
  {
    $this->client->subscriptionItems->retrieve('si_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateSubscriptionItem()
  {
    $this->client->subscriptionItems->update(
      'si_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteSubscriptionItem()
  {
    $this->client->subscriptionItems->delete('si_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListSubscriptionItems()
  {
    $this->client->subscriptionItems->all([
      'subscription' => 'sub_xxxxxxxxxxxxx',
    ]);
  }

  /**
   * @return void
   */
  function testExampleCreateSubscriptionSchedule()
  {
    $this->client->subscriptionSchedules->create([
      'customer' => 'cus_xxxxxxxxxxxxx',
      'start_date' => 1588959616,
      'end_behavior' => 'release',
      'phases' => [
        [
          'plans' => [['plan' => 'Gold special', 'quantity' => 1]],
          'iterations' => 12,
        ],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveSubscriptionSchedule()
  {
    $this->client->subscriptionSchedules->retrieve(
      'sub_sched_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdateSubscriptionSchedule()
  {
    $this->client->subscriptionSchedules->update(
      'sub_sched_xxxxxxxxxxxxx',
      ['end_behavior' => 'release']
    );
  }

  /**
   * @return void
   */
  function testExampleCancelSubscriptionSchedule()
  {
    $this->client->subscriptionSchedules->cancel('sub_sched_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleReleaseSubscriptionSchedule()
  {
    $this->client->subscriptionSchedules->release(
      'sub_sched_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleListSubscriptionSchedules()
  {
    $this->client->subscriptionSchedules->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateTaxRate()
  {
    $this->client->taxRates->create([
      'display_name' => 'VAT',
      'description' => 'VAT Germany',
      'jurisdiction' => 'DE',
      'percentage' => 19,
      'inclusive' => false,
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveTaxRate()
  {
    $this->client->taxRates->retrieve('txr_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateTaxRate()
  {
    $this->client->taxRates->update('txr_xxxxxxxxxxxxx', ['active' => false]);
  }

  /**
   * @return void
   */
  function testExampleListTaxRates()
  {
    $this->client->taxRates->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleUsageRecordCreate()
  {
    $this->client->subscriptionItems->createUsageRecord(
      'si_xxxxxxxxxxxxx',
      ['quantity' => 100, 'timestamp' => 1571252444]
    );
  }

  /**
   * @return void
   */
  function testExampleUsageRecordSummaryAll()
  {
    $this->client->subscriptionItems->allUsageRecordSummaries(
      'si_xxxxxxxxxxxxx',
      ['limit' => 3]
    );
  }

  /**
   * @return void
   */
  function testExampleCreateAccount()
  {
    $this->client->accounts->create([
      'type' => 'custom',
      'country' => 'US',
      'email' => 'jenny.rosen@example.com',
      'requested_capabilities' => ['card_payments', 'transfers'],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveAccount()
  {
    $this->client->accounts->retrieve('acct_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateAccount()
  {
    $this->client->accounts->update(
      'acct_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteAccount()
  {
    $this->client->accounts->delete('acct_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleRejectAccount()
  {
    $this->client->accounts->reject(
      'acct_xxxxxxxxxxxxx',
      ['reason' => 'fraud']
    );
  }

  /**
   * @return void
   */
  function testExampleListAccounts()
  {
    $this->client->accounts->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateLoginLink()
  {
    $this->client->accounts->createLoginLink('acct_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCreateAccountLink()
  {
    $this->client->accountLinks->create([
      'account' => 'acct_xxxxxxxxxxxxx',
      'failure_url' => 'https://example.com/failure',
      'success_url' => 'https://example.com/success',
      'type' => 'custom_account_verification',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveApplicationFee()
  {
    $this->client->applicationFees->retrieve('fee_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListApplicationFees()
  {
    $this->client->applicationFees->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateFeeRefund()
  {
    $this->client->applicationFees->createRefund('fee_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleRetrieveFeeRefund()
  {
    $this->client->applicationFees->retrieveRefund(
      'fee_xxxxxxxxxxxxx',
      'fr_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdateFeeRefund()
  {
    $this->client->applicationFees->updateRefund(
      'fee_xxxxxxxxxxxxx',
      'fr_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListFeeRefunds()
  {
    $this->client->applicationFees->allRefunds(
      'fee_xxxxxxxxxxxxx',
      ['limit' => 3]
    );
  }

  /**
   * @return void
   */
  function testExampleRetrieveCapability()
  {
    $this->client->accounts->retrieveCapability(
      'acct_xxxxxxxxxxxxx',
      'card_payments',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdateCapability()
  {
    $this->client->accounts->updateCapability(
      'acct_xxxxxxxxxxxxx',
      'card_payments',
      ['requested' => true]
    );
  }

  /**
   * @return void
   */
  function testExampleListCapability()
  {
    $this->client->accounts->allCapabilities('acct_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListCountrySpecs()
  {
    $this->client->countrySpecs->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveCountrySpec()
  {
    $this->client->countrySpecs->retrieve('US', []);
  }

  /**
   * @return void
   */
  function testExampleAccountCreateBankAccount()
  {
    $this->client->accounts->createExternalAccount(
      'acct_xxxxxxxxxxxxx',
      ['external_account' => 'btok_xxxxxxxxxxxxx']
    );
  }

  /**
   * @return void
   */
  function testExampleAccountRetrieveBankAccount()
  {
    $this->client->accounts->retrieveExternalAccount(
      'acct_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleAccountUpdateBankAccount()
  {
    $this->client->accounts->updateExternalAccount(
      'acct_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleAccountDeleteBankAccount()
  {
    $this->client->accounts->deleteExternalAccount(
      'acct_xxxxxxxxxxxxx',
      'ba_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleCreatePerson()
  {
    $this->client->accounts->createPerson(
      'acct_xxxxxxxxxxxxx',
      ['first_name' => 'Jane', 'last_name' => 'Diaz ']
    );
  }

  /**
   * @return void
   */
  function testExampleRetrievePerson()
  {
    $this->client->accounts->retrievePerson(
      'acct_xxxxxxxxxxxxx',
      'person_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdatePerson()
  {
    $this->client->accounts->updatePerson(
      'acct_xxxxxxxxxxxxx',
      'person_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleDeletePerson()
  {
    $this->client->accounts->deletePerson(
      'acct_xxxxxxxxxxxxx',
      'person_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleListPerson()
  {
    $this->client->accounts->allPersons('acct_xxxxxxxxxxxxx', ['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateTopup()
  {
    $this->client->topups->create([
      'amount' => 2000,
      'currency' => 'usd',
      'description' => 'Top-up for Jenny Rosen',
      'statement_descriptor' => 'Top-up',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveTopup()
  {
    $this->client->topups->retrieve('tu_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateTopup()
  {
    $this->client->topups->update(
      'tu_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListTopups()
  {
    $this->client->topups->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCancelTopup()
  {
    $this->client->topups->cancel('tu_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleCreateTransfer()
  {
    $this->client->transfers->create([
      'amount' => 400,
      'currency' => 'usd',
      'destination' => 'acct_xxxxxxxxxxxxx',
      'transfer_group' => 'ORDER_95',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveTransfer()
  {
    $this->client->transfers->retrieve('tr_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateTransfer()
  {
    $this->client->transfers->update(
      'tr_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListTransfers()
  {
    $this->client->transfers->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateTransferReversal()
  {
    $this->client->transfers->createReversal(
      'tr_xxxxxxxxxxxxx',
      ['amount' => 100]
    );
  }

  /**
   * @return void
   */
  function testExampleRetrieveTransferReversal()
  {
    $this->client->transfers->retrieveReversal(
      'tr_xxxxxxxxxxxxx',
      'trr_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleUpdateTransferReversal()
  {
    $this->client->transfers->updateReversal(
      'tr_xxxxxxxxxxxxx',
      'trr_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListTransferReversals()
  {
    $this->client->transfers->allReversals('tr_xxxxxxxxxxxxx', ['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveEarlyFraudWarning()
  {
    $this->client->radar->earlyFraudWarnings->retrieve(
      'issfr_xxxxxxxxxxxxx',
      []
    );
  }

  /**
   * @return void
   */
  function testExampleListEarlyFraudWarnings()
  {
    $this->client->radar->earlyFraudWarnings->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleApproveReview()
  {
    $this->client->reviews->approve('prv_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleRetrieveReview()
  {
    $this->client->reviews->retrieve('prv_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListReviews()
  {
    $this->client->reviews->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateValueList()
  {
    $this->client->radar->valueLists->create([
      'alias' => 'custom_ip_xxxxxxxxxxxxx',
      'name' => 'Custom IP Blocklist',
      'item_type' => 'ip_address',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveValueList()
  {
    $this->client->radar->valueLists->retrieve('rsl_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateValueList()
  {
    $this->client->radar->valueLists->update(
      'rsl_xxxxxxxxxxxxx',
      ['name' => 'Updated IP Block List']
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteValueList()
  {
    $this->client->radar->valueLists->delete('rsl_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListValueLists()
  {
    $this->client->radar->valueLists->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateValueListItem()
  {
    $this->client->radar->valueListItems->create([
      'value_list' => 'rsl_xxxxxxxxxxxxx',
      'value' => '1.2.3.4',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveValueListItem()
  {
    $this->client->radar->valueListItems->retrieve('rsli_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleDeleteValueListItem()
  {
    $this->client->radar->valueListItems->delete('rsli_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListValueListItems()
  {
    $this->client->radar->valueListItems->all([
      'limit' => 3,
      'value_list' => 'rsl_xxxxxxxxxxxxx',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveIssuingAuthorization()
  {
    $this->client->issuing->authorizations->retrieve('iauth_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateIssuingAuthorization()
  {
    $this->client->issuing->authorizations->update(
      'iauth_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleApproveIssuingAuthorization()
  {
    $this->client->issuing->authorizations->approve('iauth_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleDeclineIssuingAuthorization()
  {
    $this->client->issuing->authorizations->decline('iauth_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListIssuingAuthorizations()
  {
    $this->client->issuing->authorizations->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateIssuingCardholder()
  {
    $this->client->issuing->cardholders->create([
      'type' => 'individual',
      'name' => 'Jenny Rosen',
      'email' => 'jenny.rosen@example.com',
      'phone_number' => '+18888675309',
      'billing' => [
        'address' => [
          'line1' => '1234 Main Street',
          'city' => 'San Francisco',
          'state' => 'CA',
          'country' => 'US',
          'postal_code' => '94111',
        ],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveIssuingCardholder()
  {
    $this->client->issuing->cardholders->retrieve('ich_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateIssuingCardholder()
  {
    $this->client->issuing->cardholders->update(
      'ich_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListIssuingCardholders()
  {
    $this->client->issuing->cardholders->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateIssuingCard()
  {
    $this->client->issuing->cards->create([
      'cardholder' => 'ich_xxxxxxxxxxxxx',
      'currency' => 'usd',
      'type' => 'virtual',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveIssuingCard()
  {
    $this->client->issuing->cards->retrieve('ic_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateIssuingCard()
  {
    $this->client->issuing->cards->update(
      'ic_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListIssuingCards()
  {
    $this->client->issuing->cards->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveIssuingTransaction()
  {
    $this->client->issuing->transactions->retrieve('ipi_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateIssuingTransaction()
  {
    $this->client->issuing->transactions->update(
      'ipi_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListIssuingTransactions()
  {
    $this->client->issuing->transactions->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateTerminalConnectionToken()
  {
    $this->client->terminal->connectionTokens->create([]);
  }

  /**
   * @return void
   */
  function testExampleCreateTerminalLocation()
  {
    $this->client->terminal->locations->create([
      'display_name' => 'My First Store',
      'address' => [
        'line1' => '1234 Main Street',
        'city' => 'San Francisco',
        'country' => 'US',
        'postal_code' => '94111',
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveTerminalLocation()
  {
    $this->client->terminal->locations->retrieve('tml_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateTerminalLocation()
  {
    $this->client->terminal->locations->update(
      'tml_xxxxxxxxxxxxx',
      ['display_name' => 'My First Store']
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteTerminalLocation()
  {
    $this->client->terminal->locations->delete('tml_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListTerminalLocations()
  {
    $this->client->terminal->locations->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateTerminalReader()
  {
    $this->client->terminal->readers->create([
      'registration_code' => 'puppies-plug-could',
      'label' => 'Blue Rabbit',
      'location' => 'tml_1234',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveTerminalReader()
  {
    $this->client->terminal->readers->retrieve('tmr_P400-123-456-789', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateTerminalReader()
  {
    $this->client->terminal->readers->update(
      'tmr_P400-123-456-789',
      ['label' => 'Blue Rabbit']
    );
  }

  /**
   * @return void
   */
  function testExampleDeleteTerminalReader()
  {
    $this->client->terminal->readers->delete('tmr_P400-123-456-789', []);
  }

  /**
   * @return void
   */
  function testExampleListTerminalReader()
  {
    $this->client->terminal->readers->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateOrder()
  {
    $this->client->orders->create([
      'currency' => 'usd',
      'email' => 'jenny.rosen@example.com',
      'items' => [['type' => 'sku', 'parent' => 'sku_xxxxxxxxxxxxx']],
      'shipping' => [
        'name' => 'Jenny Rosen',
        'address' => [
          'line1' => '1234 Main Street',
          'city' => 'San Francisco',
          'state' => 'CA',
          'country' => 'US',
          'postal_code' => '94111',
        ],
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveOrder()
  {
    $this->client->orders->retrieve('or_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateOrder()
  {
    $this->client->orders->update(
      'or_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExamplePayOrder()
  {
    $this->client->orders->pay('or_xxxxxxxxxxxxx', ['source' => 'tok_xxxx']);
  }

  /**
   * @return void
   */
  function testExampleListOrders()
  {
    $this->client->orders->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveOrderReturn()
  {
    $this->client->orderReturns->retrieve('orret_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListOrderReturns()
  {
    $this->client->orderReturns->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateSku()
  {
    $this->client->skus->create([
      'attributes' => ['size' => 'Medium', 'gender' => 'Unisex'],
      'price' => 1500,
      'currency' => 'usd',
      'inventory' => ['type' => 'finite', 'quantity' => 500],
      'product' => 'prod_xxxxxxxxxxxxx',
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveSku()
  {
    $this->client->skus->retrieve('sku_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateSku()
  {
    $this->client->skus->update(
      'sku_xxxxxxxxxxxxx',
      ['metadata' => ['order_id' => '6735']]
    );
  }

  /**
   * @return void
   */
  function testExampleListSkus()
  {
    $this->client->skus->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleDeleteSku()
  {
    $this->client->skus->delete('sku_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleRetrieveScheduledQueryRun()
  {
    $this->client->sigma->scheduledQueryRuns->retrieve('sqr_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListScheduledQueryRun()
  {
    $this->client->sigma->scheduledQueryRuns->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleCreateReportingReportRun()
  {
    $this->client->reporting->reportRuns->create([
      'report_type' => 'balance.summary.1',
      'parameters' => [
        'interval_start' => 1522540800,
        'interval_end' => 1525132800,
      ],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveReportingReportRun()
  {
    $this->client->reporting->reportRuns->retrieve('frr_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleListReportingReportRun()
  {
    $this->client->reporting->reportRuns->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveReportingReportType()
  {
    $this->client->reporting->reportTypes->retrieve('balance.summary.1', []);
  }

  /**
   * @return void
   */
  function testExampleListReportingReportType()
  {
    $this->client->reporting->reportTypes->all([]);
  }

  /**
   * @return void
   */
  function testExampleCreateWebhookEndpoint()
  {
    $this->client->webhookEndpoints->create([
      'url' => 'https://example.com/my/webhook/endpoint',
      'enabled_events' => ['charge.failed', 'charge.succeeded'],
    ]);
  }

  /**
   * @return void
   */
  function testExampleRetrieveWebhookEndpoint()
  {
    $this->client->webhookEndpoints->retrieve('we_xxxxxxxxxxxxx', []);
  }

  /**
   * @return void
   */
  function testExampleUpdateWebhookEndpoint()
  {
    $this->client->webhookEndpoints->update(
      'we_xxxxxxxxxxxxx',
      ['url' => 'https://example.com/new_endpoint']
    );
  }

  /**
   * @return void
   */
  function testExampleListWebhookEndpoints()
  {
    $this->client->webhookEndpoints->all(['limit' => 3]);
  }

  /**
   * @return void
   */
  function testExampleDeleteWebhookEndpoints()
  {
    $this->client->webhookEndpoints->delete('we_xxxxxxxxxxxxx', []);
  }
}