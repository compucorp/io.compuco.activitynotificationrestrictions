<script type="text/javascript">
  {literal}
  (function($) {

    $(function() {
      moveFields();
    });

    /**
     * Re-organise fields
     */
    function moveFields() {
      $('.crm-preferences-display-form-activity_assignee_group_restriction').insertAfter($('.crm-preferences-display-form-activity_types').has('td.description'));
      $('#group-email-restriction-field-description').insertAfter($('.crm-preferences-display-form-activity_assignee_group_restriction'));
      $('.crm-preferences-display-form-activity_assignee_cms_user_restriction').insertBefore($('.crm-preferences-display-form-block-activity_assignee_notification_ics'));
      $('#cms-user-email-restriction-field-description').insertAfter($('.crm-preferences-display-form-activity_assignee_cms_user_restriction'));
    }

  })(CRM.$);
  {/literal}
</script>
<table>
  <tr class="crm-preferences-display-form-activity_assignee_group_restriction">
    <td class="label">
      <label for="restrict_email_recipient_groups">{ts}Restrict email recipients to groups{/ts}</label>
    </td>
    <td>{$form.restrict_email_recipient_groups.html}</td>
  </tr>
  <tr id="group-email-restriction-field-description" class="crm-preferences-display-form-block-description">
    <td>&nbsp;</td>
    <td class="description">
      {ts}Limit which contacts will receive a CiviCRM activity notification email when an activity is assigned to them. You can select any group or smart group. Leave blank for no restriction. Note that you may still assign an activity to a contact who is not in the group, but they will not receive an email.{/ts}
    </td>
  </tr>
  <tr class="crm-preferences-display-form-activity_assignee_cms_user_restriction">
    <td class="label"></td>
    <td>
      {$form.restrict_email_recipient_website_users.html}
    </td>
  </tr>
  <tr id="cms-user-email-restriction-field-description" class="crm-preferences-display-form-block-description">
    <td>&nbsp;</td>
    <td class="description">
      {ts}Limit which contacts will receive a CiviCRM activity notification email to only be those who have a CMS user when an activity is assigned to them. Note that you may still assign an activity to a contact who does not have a CMS user, but they will not receive an email.{/ts}
    </td>
  </tr>
</table>
