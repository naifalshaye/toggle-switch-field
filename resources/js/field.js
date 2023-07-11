import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-toggle-switch-field', IndexField)
  app.component('detail-toggle-switch-field', DetailField)
  app.component('form-toggle-switch-field', FormField)
})
