<template>
    <div :class="componentStyle">
        <div :class="titleStyle" v-if="group.title">
            <span class="block float-left border-40 pr-4 mr-4" :class="{'border-r': !group.withoutLabel}"><!--
             --><span class="text-60 text-xs">#</span><!--
             --><span class="text-80">{{index+1}}</span>
            </span>
            <span v-if="!group.withoutLabel" class="font-bold">{{group.title}}</span>
        </div>
        <div class="w-full">
            <component
                v-for="(item, index) in group.fields"
                :key="index"
                :is="'detail-' + item.component"
                :resource-name="resourceName"
                :resource-id="resourceId"
                :resource="resource"
                :field="item"
                :class="{ 'remove-bottom-border': index == group.fields.length - 1 }"
            />
        </div>
    </div>
</template>

<script>
export default {
    props: ['group', 'index', 'last', 'resource', 'resourceName', 'resourceId'],

    computed: {
        componentStyle() {
            let flex = this.group.withoutLabel ? 'flex flex-row' : 'flex flex-col'
            return this.last ? [flex] : [`${flex} border-b border-50 pb-4 mb-4`];
        },
        titleStyle() {
            return this.group.withoutLabel ? ['pt-4', 'pr-4'] : ['pb-4', 'border-b', 'border-40'];
        }
    }
}
</script>
