<p>Welcome {{ @resource.email }}!</p>

<p>You can confirm your account through the link below:</p>

<p>{{ link_to 'Confirm my account', confirmation_url(@resource, :confirmation_token => @resource.confirmation_token) }}</p>
